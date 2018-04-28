<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

class ThomasFormula extends BaseDistance implements DistanceInterface
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
        $A = $this->getSemiMajorAxis();
        $F = $this->getInverseFlattening();

        $ac = $lat1;
        $ad = -$long1;
        $ac = atan((1.0-$F) * tan($ac));

        $ae = $lat2;
        $af = -$long2;
        $ae = atan((1.0-$F) * tan($ae));
        

        $i = $af - $ad;
        $j = ($ae + $ac) / 2.0;
        $ak = ($ae - $ac) / 2.0;
        $h = cos($ak) * cos($ak) - sin($j) * sin($j);

        $l = sin($ak) * sin($ak) + $h * sin($i/2.0) * sin($i/2.0);
        $d = 2.0 * atan(sqrt($l/(1.0-$l)));
        
        $u = 2.0 * sin($j) * sin($j) * cos($ak) * cos($ak) / (1.0 - $l);
        $v = 2.0 * sin($ak) * sin($ak) * cos($j) * cos($j) / $l;

        $x = $u + $v;
        $y = $u - $v;
        $t = $d / sin($d);
        $dd = 4.0 * $t * $t;
        $e =2.0 * cos($d);
        $a = $dd * $e;

        $c = $t - ($a - $e) / 2.0;
        $n1 = $x * ($a + $c * $x);
        $b = 2.0 * $dd;
        $n2 = $y * ($b + $e * $y);
        $n3 = $dd * $x * $y;

        $d1d=$F * ($t * $x - $y)/4.0;
        $d2d=$F * $F * ($n1 - $n2 + $n3)/64.0;

        return $A * ($t - $d1d + $d2d) * sin($d);
    }

}