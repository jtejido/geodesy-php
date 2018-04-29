<?php

namespace Geodesy\Location;

use Geodesy\Datum\WGS84;
use Geodesy\Datum\DatumInterface;

class WebMercator
{
    /**
     * Web Mercator, Google Web Mercator, Spherical Mercator, WGS 84 Web Mercator[1] or WGS 84/Pseudo-Mercator is a variant of the Mercator 
     * projection and is the de facto standard for Web mapping applications.
     * X is easting and Y is northing.
     */
	private $x;

    private $y;

    private $referenceDatum;

    public function __construct()
    {
        $this->x = null;
        $this->y = null;
        $this->referenceDatum = new WGS84;
    }

    public function getReference(): WGS84
    {
        return $this->referenceDatum;
    }

    public function setX(float $x)
    {
        $this->x = $x;
    }

    public function setY(float $y)
    {
        $this->y = $y;
    }

    public function getX(): float
    {
        if($this->x === null) {
        	throw new \Exception('X is not set.');
        }
        return $this->x;
    }

    public function getY(): float
    {
        if($this->y === null) {
        	throw new \Exception('Y is not set.');
        }
        return $this->y;
    }

}