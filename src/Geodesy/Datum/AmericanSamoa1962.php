<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class AmericanSamoa1962 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "American Samoa 1962",
			'CRS' => 4169,
			'TranslationVectors' => array(
				'x' => 115,
				'y' => -118,
				'z' => -426,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "American Samoa - 2 main island groups",
			'Remarks' => "Transformation based on observations at 2 stations in 1993.",
			'Source' => "NIMA TR8350.2 revision of January 2000.",
			'Scope' => "For military purposes. One sigma uncertainty is 25m in each axis.",
			'Origin' => "Fundamental point: Betty 13 eccentric. Latitude: 14 degrees 20 minutes 08.34 seconds S, longitude: 170 degrees 42 minutes 52.25 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}