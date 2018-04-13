<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

abstract class BaseDistance
{

	protected $source;

    protected $destination;

    CONST R = 6371;

    public function __construct(LatLong $source, LatLong $destination)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->radius = self::R;
    }

    abstract public function getDistance();

    abstract public function isInRange($range);

}