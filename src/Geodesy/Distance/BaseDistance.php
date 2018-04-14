<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;
use Geodesy\Unit\UnitInterface;
use Geodesy\Unit\Metre;

abstract class BaseDistance
{

	protected $source;

    protected $destination;

    protected $unit;

    CONST R = 6371;

    public function __construct(LatLong $source, LatLong $destination)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->radius = self::R;
        $this->unit = null;
    }

    public function setUnit(UnitInterface $unit)
    {
        $this->unit = $unit;
    }

    public function getUnit()
    {
        return $this->unit;
    }

    public function getDistance()
    {
        $dist = $this->distance();
        if($this->getUnit() instanceof Metre){
            $dist = $dist * 1000;
         }
        $this->unit->setValue($dist);
        return $this->unit->getValue();
    }

    abstract public function distance();

    public function isInRange($range)
    {
        if($this->getUnit() instanceof Metre){
            $range = $range * 1000;
         }
        return $this->getDistance() <= $range;
    }

}