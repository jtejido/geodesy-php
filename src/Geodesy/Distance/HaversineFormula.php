<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

class HaversineFormula extends BaseDistance implements DistanceInterface
{


    public function __construct(LatLong $source, LatLong $destination)
    {
        parent::__construct($source, $destination);
    }

    /**
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

        $long_diff = $long2 - $long1;
        $lat_diff = $lat2 - $lat1;
        $a = pow(sin($lat_diff/2), 2) + cos($lat1) * cos($lat2) * pow(sin($long_diff/2), 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
        return round($c * $this->constants::SPHERICAL_R, 3);
    }

}