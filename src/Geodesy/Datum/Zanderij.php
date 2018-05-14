<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Zanderij extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Zanderij",
			'CRS' => 4311,
			'TranslationVectors' => array(
				'x' => 265,
				'y' => -120,
				'z' => 358,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Suriname",
			'Remarks' => "Derived at 5 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 5m, 5m and 8m in X, Y and Z axes.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}