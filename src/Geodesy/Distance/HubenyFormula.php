<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

/**
 * Hubeny, Karl. Zur Entwicklung der Gauss’schen Mittelbreitenformeln.
 * Osterreichische Zeitschrift fur Vermessungswesen. 1954.
 **/

class HubenyFormula extends BaseDistance implements DistanceInterface {

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
		$f2 = pow($b, 2) / pow($a, 2);
		$e2 = 1.0 - $f2;

		$lat_diff = ($lat1 - $lat2);
		$long_diff = ($long1 - $long2);
		$lat_average = 0.5 * ($lat1 + $lat2);
		$sinlat_average = sin($lat_average);
		$coslat_average = cos($lat_average);
		$w2 = 1.0 - pow($sinlat_average, 2) * $e2;
		$w = sqrt($w2);
		$meridian = $a * $f2 / ($w2 * $w);
		$n = $a / $w;

		return round(sqrt(pow($lat_diff, 2) * pow($meridian, 2) + pow($long_diff, 2) * pow($n, 2) * pow($coslat_average, 2)), 3);

	}

}