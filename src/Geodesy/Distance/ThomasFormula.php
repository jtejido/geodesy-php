<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

class ThomasFormula extends BaseDistance implements DistanceInterface {

/**
 * Thomas, P.D.. Spheroidal Geodesics, Reference Systems & Local Geometry.
 * U.S. Naval Oceanographic Office. 1970.
 **/
	public function __construct(LatLong $source, LatLong $destination) {
		parent::__construct($source, $destination);
	}

	protected function distance(): float{
		$lat1 = $this->getSourceLatitude();
		$lat2 = $this->getDestinationLatitude();
		$long1 = $this->getSourceLongitude();
		$long2 = $this->getDestinationLongitude();

		$A = $this->getSemiMajorAxis();
		$F = $this->getInverseFlattening();

		$ac = $lat1;
		$ad = -$long1;
		$ac = atan((1.0 - $F) * tan($ac));

		$ae = $lat2;
		$af = -$long2;
		$ae = atan((1.0 - $F) * tan($ae));

		$i = $af - $ad;
		$j = ($ae + $ac) / 2.0;
		$ak = ($ae - $ac) / 2.0;
		$h = pow(cos($ak), 2) - pow(sin($j), 2);

		$l = pow(sin($ak), 2) + $h * pow(sin($i / 2.0), 2);
		$d = 2.0 * atan(sqrt($l / (1.0 - $l)));

		$u = 2.0 * pow(sin($j), 2) * pow(cos($ak), 2) / (1.0 - $l);
		$v = 2.0 * pow(sin($ak), 2) * pow(cos($j), 2) / $l;

		$x = $u + $v;
		$y = $u - $v;
		$t = $d / sin($d);
		$dd = 4.0 * $t * $t;
		$e = 2.0 * cos($d);
		$a = $dd * $e;

		$c = $t - ($a - $e) / 2.0;
		$n1 = $x * ($a + $c * $x);
		$b = 2.0 * $dd;
		$n2 = $y * ($b + $e * $y);
		$n3 = $dd * $x * $y;

		$d1d = $F * ($t * $x - $y) / 4.0;
		$d2d = $F * $F * ($n1 - $n2 + $n3) / 64.0;

		return round($A * ($t - $d1d + $d2d) * sin($d), 3);
	}

}