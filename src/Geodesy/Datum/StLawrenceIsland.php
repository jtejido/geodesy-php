<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class StLawrenceIsland extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "St. Lawrence Island",
			'CRS' => 4136,
			'TranslationVectors' => array(
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "USA - Alaska - St. Lawrence Island",
			'Remarks' => "Parameter files are from St. Lawrence Island to NAD83 (1) (code 1455) assuming that NAD83 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1 to 2m level.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}