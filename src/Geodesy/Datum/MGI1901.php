<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class MGI1901 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "MGI 1901",
			'CRS' => 3906,
			'TranslationVectors' => array(
				'x' => -577.88891,
				'y' => -165.22205,
				'z' => -391.18289,
			),
			'RotationalVectors' => array(
				'x' => -4.9145,
				'y' => 0.94729,
				'z' => 13.05098,
			),
			'Scale' => -7.78664,
			'Area' => "Europe - former Yugoslavia onshore",
			'Remarks' => "Parameter values from MGI 1901 to ETRS89 (6) (code 7675). Assumes ETRS89 and WGS 84 can be considered the same to within the accuracy of the transformation.",
			'Source' => "IOGP",
			'Scope' => "For applications with an accuracy of 1m.",
			'Origin' => "Fundamental point: Hermannskogel. Latitude: 48 degrees 16 minutes 15.29 seconds N, longitude: 16 degrees 17 minutes 55.04 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}