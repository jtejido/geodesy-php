<?php

namespace Geodesy\Datum;

use Geodesy\Location\ECEF;
use Geodesy\Models\ModelInterface;


abstract class BaseDatum
{
    
    private $model;

    public function __construct(ModelInterface $model)
    {
        $this->model = $model;
        
        if($this->model === null){
            throw new \Exception('Model had to be set.');
        }
    }

    public abstract function datum(): array;

    public function getDatum(bool $toWGS = false): array
    {
        $array = $this->datum();
        
        if($toWGS) {
            array_walk_recursive($array, function (&$item, $key) 
                {
                   $item *= -1;
                }
            );
        }
        return $array;
    }

    public function getModel(): ModelInterface
    {
        return $this->model;
    }

    public function getFlattening(): float
    {
        return $this->getModel()->getFlattening();
    }

    public function getInverseFlattening(): float
    {
        return $this->getModel()->getInverseFlattening();
    }

    public function getSemiMajorAxis(): float
    {
        return $this->getModel()->getSemiMajorAxis();
    }

    public function getSemiMinorAxis(): float
    {
        return $this->getModel()->getSemiMinorAxis();
    }

    public function getFirstEccentricitySquared(): float
    {
        return $this->getModel()->getFirstEccentricitySquared();
    }

    public function getSecondEccentricitySquared(): float
    {
        return $this->getModel()->getSecondEccentricitySquared();
    }

    public function transform(ECEF $ecef): ECEF
    {

        return $this->helmertTransform($ecef);
    }

    // Burka-Wolf simplification of Helmert Transformation
    private function helmertTransform(ECEF $ecef): ECEF
    {
        $sourceDatum = $ecef->getReference();

        // if converting to wgs84, use the inverse
        if ($this instanceof WGS84){
            $array = $sourceDatum->getDatum(true);
        } else {
            $array = $this->getDatum();
        }

        $x1 = $ecef->getX();
        $y1 = $ecef->getY();
        $z1 = $ecef->getZ();
        $t  =  $array['TranslationVectors'];
        $r  =  $array['RotationalVectors'];
        $s  =  $array['Scale'];
        

        $tx = $t['x']; 
        $ty = $t['y'];
        $tz = $t['z'];
        $s1 = $s/1e6 + 1;
        $rx = deg2rad($r['x']/3600);
        $ry = deg2rad($r['y']/3600);
        $rz = deg2rad($r['z']/3600);

        $x2 = $tx + $x1*$s1 - $y1*$rz + $z1*$ry;
        $y2 = $ty + $x1*$rz + $y1*$s1 - $z1*$rx;
        $z2 = $tz - $x1*$ry + $y1*$rx + $z1*$s1;

        $location = new ECEF;
        $location->setReference($this); // changed the Reference Datum to current datum
        $location->setX($x2);
        $location->setY($y2);
        $location->setZ($z2);

        return $location;
    }


}