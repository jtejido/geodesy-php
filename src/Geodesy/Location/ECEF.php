<?php

namespace Geodesy\Location;

class ECEF
{
    /**
     * ECEF ("earth-centered, earth-fixed"), also known as ECR ("earth-centered rotational"). 
     * It represents positions as X, Y, and Z coordinates. Where the axes x and y are 'earth-fixed' along the pole and meridian
     */
	private $x;

    private $y;

    private $z;

    public function __construct()
    {
        $this->x = null;
        $this->y = null;
        $this->z = null;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getX()
    {
        if($this->x === null) {
        	throw new \Exception('X is not set.');
        }
        return $this->x;
    }

    public function getY()
    {
        if($this->y === null) {
        	throw new \Exception('Y is not set.');
        }
        return $this->y;
    }

    public function getZ()
    {
        return ($this->z === null) ? 0 : $this->z;
    }

}