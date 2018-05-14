<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Bogota1975 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Bogota 1975",
			'CRS' => 4218,
			'TranslationVectors' => array(
				'x' => -307,
				'y' => -304,
				'z' => 318,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Colombia - mainland and offshore Caribbean",
			'Remarks' => "Derived in 1987 at 7 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 6m, 5m and 6m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Bogota observatory. Latitude: 4 degrees 35 minutes 56.570 seconds N, longitude: 74 degrees 04 minutes 51.300 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}