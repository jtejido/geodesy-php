<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Datum73 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Datum 73",
			'CRS' => 4274,
			'TranslationVectors' => array(
				'x' => 238.2,
				'y' => -85.2,
				'z' => -29.9,
			),
			'RotationalVectors' => array(
				'x' => 0.166,
				'y' => 0.046,
				'z' => 1.248,
			),
			'Scale' => -2.03,
			'Area' => "Portugal - mainland - onshore",
			'Remarks' => "Parameter values from Datum 73 to ETRS89 (1) (code 1657). Assumes ETRS89 and WGS 84 can be considered the same to within the accuracy of the transformation. Replaced by Datum 73 to WGS 84 (4) (tfm code 1987).",
			'Source' => "OGP",
			'Scope' => "For applications to an accuracy of 2 metres.",
			'Origin' => "Fundamental point:  TF4, Melrica. Latitude: 39 degrees 41 minutes 37.30 seconds N, longitude: 8 degrees 07 minutes 53.31 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}