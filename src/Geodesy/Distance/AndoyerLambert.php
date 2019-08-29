<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

/**
 * Ministry Of Defense. Admiralty Manual of Navigation, Volume 1. Navy, UK, 1965.
 * Thomas, P.D. (1965). Mathematical Models for Navigation Systems. Technical Report No. 182 , US Naval
 * Oceanographic Office, Washington, D.C.
 **/
class AndoyerLambert extends BaseDistance implements DistanceInterface {

	public function __construct(LatLong $source, LatLong $destination) {
		parent::__construct($source, $destination);
	}

	protected function distance(): float{

		$lat1 = $this->getSourceLatitude();
		$lat2 = $this->getDestinationLatitude();
		$long1 = $this->getSourceLongitude();
		$long2 = $this->getDestinationLongitude();

		$a = $this->getSemiMajorAxis();
		$b = $this->getSemiMinorAxis();
		$f = $this->getInverseFlattening();
		$long_diff = $long2 - $long1;
		$rLat1 = atan($b * tan($lat1) / $a);
		$rLat2 = atan($b * tan($lat2) / $a);
		$spherical_distance = acos(sin($rLat1) * sin($rLat2) + cos($rLat1) * cos($rLat2) * cos($long_diff));

		// this is the Andoyer-Lambert Correction for Spherical Cosine Law

		$cosineSd = cos($spherical_distance / 2.0);
		$sinSd = sin($spherical_distance / 2.0);
		$c = (sin($spherical_distance) - $spherical_distance) * (sin($rLat1) + sin($rLat2)) * (sin($rLat1) + sin($rLat2)) / pow($cosineSd, 2);
		$s = (sin($spherical_distance) + $spherical_distance) * (sin($rLat1) - sin($rLat2)) * (sin($rLat1) - sin($rLat2)) / pow($sinSd, 2);
		$delta = $f / 8.0 * ($c - $s);

		return round($a * ($spherical_distance + $delta), 3);
	}

}