<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class CSG67 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Centre Spatial Guyanais 1967",
			'CRS' => 4623,
			'TranslationVectors' => array(
				'x' => 186,
				'y' => -230,
				'z' => -110,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "French Guiana - coastal area",
			'Remarks' => "",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "Fundamental point: Kourou-Diane. Latitude: 5 degrees 15 minutes 53.699 seconds N, longitude: 52 degrees 48 minutes 09.149 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}