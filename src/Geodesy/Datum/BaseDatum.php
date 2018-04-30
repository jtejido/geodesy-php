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

}