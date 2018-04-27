<?php

namespace Geodesy\Location;


class LatLong
{

	private $latitude;

    private $longitude;

    private $altitude;

    private $referenceDatum;

    public function __construct()
    {
        $this->latitude = null;
        $this->longitude = null;
        $this->altitude = null;
        $this->referenceDatum = null;
    }

    public function setLatitude($lat)
    {
        $this->latitude = $lat;
    }

    public function setLongitude($long)
    {
        $this->longitude = $long;
    }

    public function setAltitude($alt)
    {
        $this->altitude = $alt;
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

    public function getAltitude()
    {
        return ($this->altitude === null) ? 0 : $this->altitude;
    }

}