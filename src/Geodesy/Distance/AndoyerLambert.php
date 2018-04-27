<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

class AndoyerLambert extends BaseDistance implements DistanceInterface
{


    public function __construct(LatLong $source, LatLong $destination)
    {
        parent::__construct($source, $destination);
    }


    public function distance()
    {
        $lat1 = deg2rad($this->source->getLatitude());
        $lat2 = deg2rad($this->destination->getLatitude());
        $long1 = deg2rad($this->source->getLongitude());
        $long2 = deg2rad($this->destination->getLongitude());
        $a = $this->constants::A;
        $b = $this->constants::B;
        $f = $this->constants::F;
        $long_diff = $long2 - $long1;
        $rLat1=atan($b*tan($lat1)/$a);
        $rLat2=atan($b*tan($lat2)/$a);
        $spherical_distance = acos(sin($rLat1) * sin($rLat2) + cos($rLat1) * cos($rLat2) * cos($long_diff));
        $cosineSd = cos($spherical_distance/2.0);
        $sinSd = sin($spherical_distance/2.0);
        $c = (sin($spherical_distance) - $spherical_distance) * (sin($rLat1)+sin($rLat2))*(sin($rLat1)+sin($rLat2)) / pow($cosineSd, 2);
        $s = (sin($spherical_distance) + $spherical_distance) * (sin($rLat1)-sin($rLat2))*(sin($rLat1)-sin($rLat2)) / pow($sinSd,2);
        $delta = $f / 8.0 * ($c-$s);

        return $a*($spherical_distance+$delta);
    }

}