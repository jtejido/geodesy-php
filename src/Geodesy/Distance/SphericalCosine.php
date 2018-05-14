<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;
use Geodesy\Datum\WGS84;

class SphericalCosine extends BaseDistance implements DistanceInterface
{


    public function __construct(LatLong $source, LatLong $destination)
    {
        parent::__construct($source, $destination);
        $this->commonDatum = new WGS84; // hijack common datum as GCD can make use of WGS84's mean radius as per recommendation.
    }

    /**
     * Great-circle distance type
     * d = acos( sin φ1 * sin φ2 + cos φ1 * cos φ2 * cos Δλ ) * R
     * where φ1 = lat1, φ2 = lat2, Δλ = (long2-long1), R = Earth's mean radius (in kilometers)
     */
    protected function distance(): float
    {
        $lat1 = $this->getSourceLatitude();
        $lat2 = $this->getDestinationLatitude();
        $long1 = $this->getSourceLongitude();
        $long2 = $this->getDestinationLongitude();
        $a = $this->commonDatum->getSemiMajorAxis();
        $b = $this->commonDatum->getSemiMinorAxis();
        $R = 1/3 * ( (2 * $a) + $b);

        $long_diff = $long2 - $long1;
        return round(acos(sin($lat1) * sin($lat2) + cos($lat1) * cos($lat2) * cos($long_diff)) * $R, 3);
    }  

}