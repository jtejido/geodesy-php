<?php

namespace Geodesy\Datum;

use Geodesy\Models\Everest18301937Adjustment;

class Indian1954 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Indian 1954",
			'CRS' => 4239,
			'TranslationVectors' => array(
				'x' => -217,
				'y' => -823,
				'z' => -299,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Asia - Myanmar and Thailand onshore",
			'Remarks' => "Derived at 11 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes. Accuracy 15m, 6m and 12m in X, Y and Z axes.",
			'Origin' => "Extension of Kalianpur 1937 over Myanmar and Thailand.",
		);

	public function __construct()
	{
		parent::__construct(new Everest18301937Adjustment);
	}

}