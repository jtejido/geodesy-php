<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class StPaulIsland extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "St. Paul Island",
			'CRS' => 4137,
			'TranslationVectors' => array(
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "USA - Alaska - St. Paul Island",
			'Remarks' => "Parameter files are from St. Paul Island to NAD83 (1) (code 1456) assuming that NAD83 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1 to 2m level.",
			'Origin' => "Fundamental point latitude: 57 degrees 07 minutes 16.86 seconds N, longitude: 170 degrees 16 minutes 24.00 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}