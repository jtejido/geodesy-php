<?php

namespace Geodesy\Models;


abstract class BaseModel
{
    

    public function getFlattening()
    {
        return static::FLATTENING;
    }

    public function getInverseFlattening()
    {
        return 1 / static::FLATTENING;
    }

    public function getSemiMajorAxis()
    {
        return static::SEMI_MAJOR_AXIS;
    }

    public function getSemiMinorAxis()
    {
        return static::SEMI_MINOR_AXIS;
    }

    public function getFirstEccentricitySquared()
    {
        return (2 * $this->getInverseFlattening()) - pow($this->getInverseFlattening(), 2);
    }

    public function getSecondEccentricitySquared()
    {
        return $this->getInverseFlattening() * (2 - $this->getInverseFlattening()) / pow(1 - $this->getInverseFlattening(), 2);
    }

}