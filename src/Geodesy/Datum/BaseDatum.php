<?php

namespace Geodesy\Datum;

use Geodesy\Location\ECEF;
use Geodesy\Location\LatLong;
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

    public function datum(): array
    {
        return static::DATUM;
    }

    public function getVector(bool $toWGS = false): array
    {
        $array = $this->datum();
 
        if($toWGS) {
            array_walk_recursive($array, function (&$item, $key) 
                {
                    if($key == 'x' || $key == 'y' || $key == 'z' || $key == 'Scale')
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

    public function getRemarks(): string
    {
        return static::DATUM['Remarks'];
    }

    public function getSource(): string
    {
        return static::DATUM['Source'];
    }

    public function getScope(): string
    {
        return static::DATUM['Scope'];
    }

    public function getOrigin(): string
    {
        return static::DATUM['Origin'];
    }

    public function getName(): string
    {
        return static::DATUM['Name'];
    }

    public function getCRSCode(): int
    {
        return static::DATUM['CRS'];
    }

    public function getArea(): string
    {
        return static::DATUM['Area'];
    }

    public function getFlattening(): float
    {
        return static::DATUM;
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

}