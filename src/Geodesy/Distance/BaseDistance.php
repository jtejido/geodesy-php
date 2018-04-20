<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;
use Geodesy\Unit\UnitInterface;
use Geodesy\Unit\KiloMetre;

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
        $this->unit = new KiloMetre;
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
        return $this->getUnit()->convert($this->distance());
    }

    abstract public function distance();

    public function isInRange($range)
    {
        return $this->getDistance() <= $this->getUnit()->convert($range);
    }

}