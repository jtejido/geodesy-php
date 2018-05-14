<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Hjorsey1955 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Hjorsey 1955",
			'CRS' => 4658,
			'TranslationVectors' => array(
				'x' => 73,
				'y' => -46,
				'z' => 86,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Iceland - onshore",
			'Remarks' => "Derived at 6 stations. Replaced by Hjorsey 1955 to WGS 84 (2) (code 6909).",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "Accuracy 3m, 3m and 5m in X, Y and Z axes.",
			'Origin' => "Fundamental point:  Latitude: 64 degrees 31 minutes 29.26 seconds N, longitude: 22 degrees 22 minutes 05.84 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}