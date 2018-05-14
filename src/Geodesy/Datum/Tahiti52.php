<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Tahiti52 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Tahiti 52",
			'CRS' => 4628,
			'TranslationVectors' => array(
				'x' => -162,
				'y' => -117,
				'z' => -154,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "French Polynesia - Society Islands - Moorea and Tahiti",
			'Remarks' => "",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "Fundamental point: Tahiti North Base. Latitude: 17 degrees 38 minutes 10.0 seconds S, longitude: 149 degrees 36 minutes 57.8 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}