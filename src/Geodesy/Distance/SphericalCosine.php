<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

class SphericalCosine extends BaseDistance implements DistanceInterface
{


    /**
     * d = acos( sin φ1 * sin φ2 + cos φ1 * cos φ2 * cos Δλ ) * R
     * where φ1 = lat1, φ2 = lat2, Δλ = (long2-long1), R = Earth's mean radius (in kilometers)
     */
    public function getDistance()
    {
        $lat1 = deg2rad($this->source->getLatitude());
        $lat2 = deg2rad($this->destination->getLatitude());
        $long1 = deg2rad($this->source->getLongitude());
        $long2 = deg2rad($this->destination->getLongitude());
        $long_diff = $long2 - $long1;
        return acos(sin($lat1) * sin($lat2) + cos($lat1) * cos($lat2) * cos($long_diff)) * $this->radius;
    }

    /**
     * Checks if distance is within a set range (in kilometers)
     * @param  int $range
     * @return bool
     */
    public function isInRange($range)
    {
        return $this->getDistance() <= $range;
    }

    

}