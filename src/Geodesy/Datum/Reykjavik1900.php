<?php

namespace Geodesy\Datum;

use Geodesy\Models\Danish1876;

class Reykjavik1900 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reykjavik 1900",
			'CRS' => 4657,
			'TranslationVectors' => array(
				'x' => 28,
				'y' => -199,
				'z' => -5,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Iceland - onshore",
			'Remarks' => "",
			'Source' => "Landmaelingar Islands (National Land Survey of Iceland).",
			'Scope' => "Low accuracy applications.",
			'Origin' => "Fundamental point:  Latitude: 64 degrees 08 minutes 31.88 seconds N, longitude: 21 degrees 55 minutes 51.15 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Danish1876);
	}

}