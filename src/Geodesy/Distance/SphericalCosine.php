<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

class SphericalCosine extends BaseDistance implements DistanceInterface
{

    public function __construct(LatLong $source, LatLong $destination)
    {
        parent::__construct($source, $destination);
    }

    /**
     * d = acos( sin φ1 * sin φ2 + cos φ1 * cos φ2 * cos Δλ ) * R
     * where φ1 = lat1, φ2 = lat2, Δλ = (long2-long1), R = Earth's mean radius (in kilometers)
     */
    public function distance(): float
    {
        $lat1 = $this->lat1;
        $lat2 = $this->lat2;
        $long1 = $this->long1;
        $long2 = $this->long2;
        $long_diff = $long2 - $long1;
        return round(acos(pow(sin($lat1), 2) + pow(cos($lat1), 3) ) * $this->constants::SPHERICAL_R, 3);
    }  

}