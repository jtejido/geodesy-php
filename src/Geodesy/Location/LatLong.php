<?php

namespace Geodesy\Location;

use Geodesy\Datum\WGS84;
use Geodesy\Datum\DatumInterface;

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

    public function setLatitude(float $lat)
    {
        $this->latitude = $lat;
    }

    public function setLongitude(float $long)
    {
        $this->longitude = $long;
    }

    public function setAltitude(float $alt)
    {
        $this->altitude = $alt;
    }

    public function getLatitude(): float
    {
        if($this->latitude === null) {
            throw new \Exception('Latitude is not set.');
        }
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        if($this->longitude === null) {
            throw new \Exception('Longitude is not set.');
        }
        return $this->longitude;
    }

    public function getAltitude(): float
    {
        return ($this->altitude === null) ? 0 : $this->altitude;
    }

}