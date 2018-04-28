<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

class HubenyFormula extends BaseDistance implements DistanceInterface
{


    public function __construct(LatLong $source, LatLong $destination)
    {
        parent::__construct($source, $destination);
    }


    public function distance()
    {
        $lat1 = $this->lat1;
        $lat2 = $this->lat2;
        $long1 = $this->long1;
        $long2 = $this->long2;
        $a = $this->getSemiMajorAxis();
        $b = $this->getSemiMinorAxis();
        $f = $this->getInverseFlattening();
        $f2 = ($b * $b) / ($a * $a);
        $e2 = 1.0 - $f2;

        $lat_diff = ($lat1 - $lat2);
        $long_diff = ($long1 - $long2);
        $lat_average = 0.5 * ($lat1 + $lat2);
        $sinlat_average = sin($lat_average);
        $coslat_average = cos($lat_average);
        $w2 = 1.0 - $sinlat_average * $sinlat_average * $e2;
        $w = sqrt($w2);
        $meridian = $a * $f2 / ($w2 * $w);
        $n = $a / $w;

        return sqrt(
        $lat_diff * $lat_diff * $meridian * $meridian +
        $long_diff * $long_diff * $n * $n * $coslat_average * $coslat_average
        );


        return $a*($spherical_distance+$delta);
    }

}