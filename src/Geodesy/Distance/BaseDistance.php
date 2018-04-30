<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;
use Geodesy\Unit\UnitInterface;
use Geodesy\Unit\Metre;
use Geodesy\Conversion\LLA2ECEF;
use Geodesy\Conversion\ECEF2LLA;
use Geodesy\Datum\WGS84;
use Geodesy\Datum\DatumInterface;

abstract class BaseDistance
{

	public $source;

    private $destination;

    private $commonDatum;

    private $unit;

    public function __construct(LatLong $source, LatLong $destination)
    {
        $this->source = $source;
        $this->destination = $destination;
        $this->unit = new Metre; // default unit
        $this->commonDatum = $this->destination->getReference();
        $this->checkDatum();
    }

    protected function getSourceLatitude(): float
    {
        return deg2rad($this->source->getLatitude());
    }

    protected function getSourceLongitude(): float
    {
        return deg2rad($this->source->getLongitude());
    }

    protected function getDestinationLatitude(): float
    {
        return deg2rad($this->destination->getLatitude());
    }

    protected function getDestinationLongitude(): float
    {
        return deg2rad($this->destination->getLongitude());
    }

    public function setUnit(UnitInterface $unit)
    {
        $this->unit = $unit;
    }

    private function getUnit(): UnitInterface
    {
        return $this->unit;
    }

    public function getDistance(): float
    {
        return $this->getUnit()->convert($this->distance());
    }

    public function checkDatum()
    {

        $sourceDatum = $this->source->getReference();
        $destinationDatum = $this->destination->getReference();

        if($sourceDatum instanceof WGS84 || $destinationDatum instanceof WGS84) {
            $this->transformSourceTo($destinationDatum);
        }

        if(!$sourceDatum instanceof WGS84 && !$destinationDatum instanceof WGS84) {
            if(!$sourceDatum instanceof $destinationDatum) {
                // convert to WGS84 first, then to destination's datum
                $this->transformSourceTo(new WGS84);
                $this->transformSourceTo($destinationDatum);
            }
        }

    }

    private function transformSourceTo(DatumInterface $datum)
    {
        $lla2ecef = new LLA2ECEF($this->source);
        $source_ecef = $lla2ecef->convert();
        $new_ecef = $datum->transform($source_ecef);
        $ecef2lla = new ECEF2LLA($new_ecef);
        $this->source = $ecef2lla->convert();
    }

    protected function getSemiMajorAxis(): float
    {
        return $this->commonDatum->getSemiMajorAxis();
    }

    protected function getSemiMinorAxis(): float
    {
        return $this->commonDatum->getSemiMinorAxis();
    }

    protected function getInverseFlattening(): float
    {
        return $this->commonDatum->getInverseFlattening();
    }

    public function getSecondEccentricitySquared(): float
    {
        return $this->commonDatum->getSecondEccentricitySquared();
    }

    public function isInRange(float $range): bool
    {
        return $this->getDistance() <= $this->getUnit()->convert($range);
    }

}