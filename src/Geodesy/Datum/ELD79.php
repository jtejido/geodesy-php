<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class ELD79 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "European Libyan Datum 1979",
			'CRS' => 4159,
			'TranslationVectors' => array(
				'x' => 117.7,
				'y' => 100.3,
				'z' => 152.4,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Libya",
			'Remarks' => "Derived by SDL for Total in Cyrenaica blocks 2 & 4.",
			'Source' => "Total",
			'Scope' => "Oil and gas exploration.",
			'Origin' => "Extension of ED50 over Libya.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}