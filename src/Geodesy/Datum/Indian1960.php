<?php

namespace Geodesy\Datum;

use Geodesy\Models\Everest18301937Adjustment;

class Indian1960 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Indian 1960",
			'CRS' => 4131,
			'TranslationVectors' => array(
				'x' => -198,
				'y' => -881,
				'z' => -317,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Asia - Cambodia and Vietnam - onshore & Cuu Long basin",
			'Remarks' => "Derived at 2 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes. Accuracy 25m in each axis.",
			'Origin' => "DMA extension over IndoChina of the Indian 1954 network adjusted  to better fit local geoid.",
		);

	public function __construct()
	{
		parent::__construct(new Everest18301937Adjustment);
	}

}