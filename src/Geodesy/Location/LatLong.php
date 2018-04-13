<?php

namespace Geodesy\Location;

class LatLong
{

	private $latitude;

    private $longitude;

    public function __construct()
    {
        $this->latitude = null;
        $this->longitude = null;
    }

    public function setLatitude($lat)
    {
        $this->latitude = $lat;
    }

    public function setLongitude($long)
    {
        $this->longitude = $long;
    }

    public function getLatitude()
    {
        if($this->latitude === null) {
        	throw new \Exception('Latitude is not set.');
        }
        return $this->latitude;
    }

    public function getLongitude()
    {
        if($this->longitude === null) {
        	throw new \Exception('Longitude is not set.');
        }
        return $this->longitude;
    }

}