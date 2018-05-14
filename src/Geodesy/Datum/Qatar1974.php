<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Qatar1974 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Qatar 1974",
			'CRS' => 4285,
			'TranslationVectors' => array(
				'x' => 128,
				'y' => 283,
				'z' => -22,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Qatar",
			'Remarks' => "Derived at 3 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy 20m in each axis.",
			'Origin' => "Fundamental point: Station G3.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}