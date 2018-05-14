<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;
use Geodesy\Datum\WGS84;

class HaversineFormula extends BaseDistance implements DistanceInterface
{


    public function __construct(LatLong $source, LatLong $destination)
    {
        parent::__construct($source, $destination);
        $this->commonDatum = new WGS84; // hijack common datum as GCD can make use of WGS84's mean radius as per recommendation.
    }

    /**
     * Great-circle distance type
     * a = sin²(Δφ/2) + cos φ1 * cos φ2 * sin²(Δλ/2)
     * c = 2 * atan2( √a, √(1−a) )
     * d = R * c
     * where φ1 = lat1, φ2 = lat2, Δφ = (lat2-lat1), Δλ = (long2-long1), R = Earth's mean radius (in kilometers)
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
        $lat_diff = $lat2 - $lat1;
        $a = pow(sin($lat_diff/2), 2) + cos($lat1) * cos($lat2) * pow(sin($long_diff/2), 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        return round($c * $R, 3);
    }

}