<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class StVincent1945 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "St. Vincent 1945",
			'CRS' => 4607,
			'TranslationVectors' => array(
				'x' => -195.671,
				'y' => -332.517,
				'z' => -274.607,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "St Vincent and the Grenadines - onshore",
			'Remarks' => "Derived at 4 points.",
			'Source' => "Clifford J Mugnier, Louisiana State University.",
			'Scope' => "1m accuracy.",
			'Origin' => "Fundamental point: station V1, Fort Charlotte.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}