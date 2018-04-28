<?php

namespace Geodesy\Location;

use Geodesy\Datum\WGS84;
use Geodesy\Datum\DatumInterface;

class ECEF
{
    /**
     * ECEF ("earth-centered, earth-fixed"), also known as ECR ("earth-centered rotational"). 
     * It represents positions as X, Y, and Z coordinates. Where the axes x and y are 'earth-fixed' along the pole and meridian
     */
	private $x;

    private $y;

    private $z;

    private $referenceDatum;

    public function __construct()
    {
        $this->x = null;
        $this->y = null;
        $this->z = null;
        $this->referenceDatum = new WGS84;
    }

    public function setReference(DatumInterface $datum)
    {
        $this->referenceDatum = $datum;
    }

    public function getReference(): DatumInterface
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

    public function setZ(float $z)
    {
        $this->z = $z;
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

    public function getZ(): float
    {
        return ($this->z === null) ? 0 : $this->z;
    }

}