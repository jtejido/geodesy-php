<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class StGeorgeIsland extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "St. George Island",
			'CRS' => 4138,
			'TranslationVectors' => array(
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "USA - Alaska - St. George Island",
			'Remarks' => "Parameter files are from St. George Island to NAD83 (1) (code 1457) assuming that NAD83 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1 to 2m level.",
			'Origin' => "Fundamental point latitude: 56 degrees 36 minutes 11.31 seconds N, longitude: 169 degrees 32 minutes 36.00 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}