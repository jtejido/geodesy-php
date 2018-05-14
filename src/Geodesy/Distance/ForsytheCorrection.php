<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

class ForsytheCorrection extends BaseDistance implements DistanceInterface
{


    public function __construct(LatLong $source, LatLong $destination)
    {
        parent::__construct($source, $destination);
    }

    /**
     * This is Forsythe Andoyer Lambert Correction.
     * http://www2.unb.ca/gge/Pubs/TR77.pdf
     */

    protected function distance(): float
    {

        $lat1 = $this->getSourceLatitude();
        $lat2 = $this->getDestinationLatitude();
        $long1 = $this->getSourceLongitude();
        $long2 = $this->getDestinationLongitude();

        $a = $this->getSemiMajorAxis();
        $f = $this->getInverseFlattening();

        $long_diff = $long2 - $long1;
        $spherical_distance = acos(sin($lat1) * sin($lat2) + cos($lat1) * cos($lat2) * cos($long_diff));

        // this is the Forsythe Correction for Spherical Cosine Law
        
        $P = pow(sin($lat1) + sin($lat2), 2) / (1 + cos($spherical_distance));
        $Q = pow(sin($lat1) - sin($lat2), 2) / (1 - cos($spherical_distance));
        $X = $P + $Q;
        $Y = $P - $Q;
        $delta_d1 = -( ($X*$spherical_distance) - (3*$Y*sin($spherical_distance))) / 4;

        $A = (64*$spherical_distance) + ((16 * pow($spherical_distance, 2)) / tan($spherical_distance));
        $D = (48*sin($spherical_distance)) + ((8 * (pow($spherical_distance, 2))) / sin($spherical_distance));
        $B = -2*$D;
        $E = 30 * sin(2 * $spherical_distance);
        $C = -((30*$spherical_distance) + (8 * pow($spherical_distance, 2) / tan($spherical_distance)) + ($E/2));
        $delta_d2 = $f * ($A*$X + $B*$Y + $C*pow($X, 2) + $D*$X*$Y + $E*pow($Y, 2)) / 128;

        $delta = $delta_d1 + $delta_d2;

        return round($a * ($spherical_distance + ($f * $delta)), 3);
    }

}