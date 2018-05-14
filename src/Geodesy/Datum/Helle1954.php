<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Helle1954 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Helle 1954",
			'CRS' => 4660,
			'TranslationVectors' => array(
				'x' => -982.6087,
				'y' => -552.753,
				'z' => 540.873,
			),
			'RotationalVectors' => array(
				'x' => 32.39344,
				'y' => -153.25684,
				'z' => -96.2266,
			),
			'Scale' => -16.805,
			'Area' => "Jan Mayen - onshore",
			'Remarks' => "Derived at 3 stations. Residuals under 1m.",
			'Source' => "'Transformation from existing geodetic network to WGS84', Geodesy Division, Statens kartverk, 26/11/92.",
			'Scope' => "For applications to an accuracy of 1 metre.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}