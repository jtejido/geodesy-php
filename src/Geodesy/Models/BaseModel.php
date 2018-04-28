<?php

namespace Geodesy\Models;


abstract class BaseModel
{
    
    public function getFlattening(): float
    {
        return static::FLATTENING;
    }

    public function getInverseFlattening(): float
    {
        return 1 / static::FLATTENING;
    }

    public function getSemiMajorAxis(): float
    {
        return static::SEMI_MAJOR_AXIS;
    }

    public function getSemiMinorAxis(): float
    {
        return static::SEMI_MINOR_AXIS;
    }

    public function getFirstEccentricitySquared(): float
    {
        return (2 * $this->getInverseFlattening()) - pow($this->getInverseFlattening(), 2);
    }

    public function getSecondEccentricitySquared(): float
    {
        return $this->getInverseFlattening() * (2 - $this->getInverseFlattening()) / pow(1 - $this->getInverseFlattening(), 2);
    }

}