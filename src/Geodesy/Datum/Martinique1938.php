<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Martinique1938 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Martinique 1938",
			'CRS' => 4625,
			'TranslationVectors' => array(
				'x' => -186,
				'y' => -482,
				'z' => -151,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Martinique - onshore",
			'Remarks' => "",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "Fundamental point: Fort Desaix. Latitude: 14 degrees 36 minutes 54.090 seconds N, longitude: 61 degrees 04 minutes 04.030 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}