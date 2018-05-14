<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Qornoq1927 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Qornoq 1927",
			'CRS' => 4194,
			'TranslationVectors' => array(
				'x' => -164,
				'y' => -138,
				'z' => 189,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Greenland - west coast",
			'Remarks' => "Derived at 2 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 25m, 25m and 32m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Station 7008. Latitude: 64 degrees 31 minutes 06.27 seconds N, longitude: 51 degrees 12 minutes 24.86 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}