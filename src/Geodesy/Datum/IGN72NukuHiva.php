<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class IGN72NukuHiva extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "IGN72 Nuku Hiva",
			'CRS' => 4630,
			'TranslationVectors' => array(
				'x' => -84,
				'y' => -274,
				'z' => -65,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "French Polynesia - Marquesas Islands - Nuku Hiva, Ua Huka and Ua Pou",
			'Remarks' => "",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "Fundamental point: Taiohae. Latitude: 8 degrees 55 minutes 03.97 seconds S, longitude: 140 degrees 05 minutes 36.24 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}