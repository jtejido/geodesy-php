<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class ST84IledesPins extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "ST84 Ile des Pins",
			'CRS' => 4642,
			'TranslationVectors' => array(
				'x' => 13,
				'y' => 348,
				'z' => -292,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "New Caledonia - Ile des Pins",
			'Remarks' => "",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "Fundamental point: Pic Nga.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}