<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class GGRS87 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Greek Geodetic Reference System 1987",
			'CRS' => 4121,
			'TranslationVectors' => array(
				'x' => 199.87,
				'y' => -74.79,
				'z' => -246.62,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Greece - onshore",
			'Remarks' => "",
			'Source' => "Geodesy Department; Public Petroleum Corporation of Greece.",
			'Scope' => "For applications requiring 1m or better accuracy.",
			'Origin' => "Fundamental point: Dionysos. Latitude 38 degrees 04 minutes 33.8 seconds N, longitude 23 degrees 55 minutes 51.0 seconds E of Greenwich; geoid height 7.0 m.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}