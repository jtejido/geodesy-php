<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Combani1950 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Combani 1950",
			'CRS' => 4632,
			'TranslationVectors' => array(
				'x' => 382,
				'y' => 59,
				'z' => 262,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Mayotte - onshore",
			'Remarks' => "",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "Combani South Base.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}