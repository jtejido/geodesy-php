<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1967;

class HD72 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Hungarian Datum 1972",
			'CRS' => 4237,
			'TranslationVectors' => array(
				'x' => -56,
				'y' => 75.77,
				'z' => 15.31,
			),
			'RotationalVectors' => array(
				'x' => 0.37,
				'y' => 0.2,
				'z' => 0.21,
			),
			'Scale' => -1.01,
			'Area' => "Hungary",
			'Remarks' => "Parameter values taken from HD72 to ETRS89 (1) (code 1829) assuming that ETRS89 is equivalent to WGS 84 within the accuracy of the transformation. OGP recommends use of newer MSZ 7222 equivalent (tfm code 1448) in preference to this transformation.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level assuming that ETRS89 is equivalent to WGS 84.",
			'Origin' => "Fundamental point: Szolohegy. Latitude: 47 degrees 17 minutes 32,6156 seconds N, longitude 19 degrees 36 minutes 09.9865 seconds E (of Greenwich); geoid height 6.56m.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1967);
	}

}