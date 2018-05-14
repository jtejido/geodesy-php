<?php

namespace Geodesy\Datum;

use Geodesy\Models\Everest18301937Adjustment;

class Indian1975 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Indian 1975",
			'CRS' => 4240,
			'TranslationVectors' => array(
				'x' => -209,
				'y' => -818,
				'z' => -290,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Thailand - onshore and Gulf of Thailand",
			'Remarks' => "Derived at 62 stations. Replaced by Indian 1975 to WGS 84 (2) (code 1304).",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 second edition September 1991",
			'Scope' => "For military purposes. Accuracy 3m, 2m and 3m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Khau Sakaerang.",
		);

	public function __construct()
	{
		parent::__construct(new Everest18301937Adjustment);
	}

}