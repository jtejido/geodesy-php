<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Lisbon extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Lisbon 1937",
			'CRS' => 4207,
			'TranslationVectors' => array(
				'x' => 280.9,
				'y' => 89.8,
				'z' => -130.2,
			),
			'RotationalVectors' => array(
				'x' => -1.721,
				'y' => 0.355,
				'z' => -0.371,
			),
			'Scale' => 5.92,
			'Area' => "Portugal - mainland - onshore",
			'Remarks' => "Parameter values from Lisbon to ETRS89 (1) (code 1655). Assumes ETRS89 and WGS 84 can be considered the same to within the accuracy of the transformation. Replaced by Lisbon to WGS 84 (4) (code 1988).",
			'Source' => "OGP",
			'Scope' => "For applications to an accuracy of 3 metres.",
			'Origin' => "Fundamental point: Castelo Sao Jorge, Lisbon. Latitude: 38 degrees 42 minutes 43.631 seconds N, longitude: 9 degrees 07 minutes 54.862 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}