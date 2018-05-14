<?php

namespace Geodesy\Datum;

use Geodesy\Models\Krassowsky1940;

class Hanoi1972 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Hanoi 1972",
			'CRS' => 4147,
			'TranslationVectors' => array(
				'x' => 17.51,
				'y' => 108.32,
				'z' => 62.39,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Vietnam - onshore",
			'Remarks' => "Derived in Vung Tau area.",
			'Source' => "BP Amoco",
			'Scope' => "Oil exploration.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Krassowsky1940);
	}

}