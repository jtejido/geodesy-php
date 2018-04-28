<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;
use Geodesy\Unit\UnitInterface;
use Geodesy\Unit\Metre;
use Geodesy\Conversion\LLA2ECEF;
use Geodesy\Conversion\ECEF2LLA;
use Geodesy\Constants\Constants;
use Geodesy\Datum\WGS84;
use Geodesy\Datum\DatumInterface;

abstract class BaseDistance
{

	protected $source;

    protected $sourceDatum;

    protected $destination;

    protected $destinationDatum;

    protected $commonDatum;

    protected $unit;

    protected $constants;

    public function __construct(LatLong $source, LatLong $destination)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->commonDatum = null;

        if ($this->source === null || $this->destination === null) {
            throw new \Exception('Source or Destination cannot be null');
        }

        $this->lat1 = deg2rad($this->source->getLatitude());
        $this->long1 = deg2rad($this->source->getLongitude());
        $this->sourceDatum = $this->source->getReference();

        $this->lat2 = deg2rad($this->destination->getLatitude());
        $this->long2 = deg2rad($this->destination->getLongitude());
        $this->destinationDatum = $this->destination->getReference();

        if(!$this->sourceDatum instanceof $this->destinationDatum) {
            $this->transformSource($this->destinationDatum);
        } else {
            $this->commonDatum = $this->sourceDatum->getReference();
        }

        $this->unit = new Metre; // default unit
        $this->constants = new Constants; // for spherical formulas
    }

    public function setUnit(UnitInterface $unit)
    {
        $this->unit = $unit;
    }

    public function getUnit(): UnitInterface
    {
        return $this->unit;
    }

    public function getDistance(): float
    {
        if($this->commonDatum !== null) {
            return $this->getUnit()->convert($this->distance());
        }
    }

    public function transformSource(DatumInterface $datum)
    {

        $lla2ecef = new LLA2ECEF($this->source);
        $source_ecef = $lla2ecef->convert();
        $new_ecef = $datum->transform($source_ecef);
        $ecef2lla = new ECEF2LLA($new_ecef);
        $this->source = $ecef2lla->convert();
        $this->commonDatum = $datum;

    }

    public function getSemiMajorAxis(): float
    {
        return $this->commonDatum->getSemiMajorAxis();
    }

    public function getSemiMinorAxis(): float
    {
        return $this->commonDatum->getSemiMinorAxis();
    }

    public function getInverseFlattening(): float
    {
        return $this->commonDatum->getInverseFlattening();
    }

    abstract public function distance(): float;

    public function isInRange(float $range)
    {
        return $this->getDistance() <= $this->getUnit()->convert($range);
    }

}