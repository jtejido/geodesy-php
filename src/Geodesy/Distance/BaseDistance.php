<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;
use Geodesy\Unit\UnitInterface;
use Geodesy\Unit\Metre;
use Geodesy\Constants\Constants;

abstract class BaseDistance
{

	protected $source;

    protected $destination;

    protected $unit;

    protected $constants;

    public function __construct(LatLong $source, LatLong $destination)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->unit = new Metre;
        $this->constants = new Constants;
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