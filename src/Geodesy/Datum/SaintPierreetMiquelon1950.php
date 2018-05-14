<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class SaintPierreetMiquelon1950 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Saint Pierre et Miquelon 1950",
			'CRS' => 4638,
			'TranslationVectors' => array(
				'x' => -30,
				'y' => -430,
				'z' => -368,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "St Pierre and Miquelon - onshore",
			'Remarks' => "",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}