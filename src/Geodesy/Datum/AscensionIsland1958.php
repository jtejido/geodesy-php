<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class AscensionIsland1958 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Ascension Island 1958",
			'CRS' => 4712,
			'TranslationVectors' => array(
				'x' => 205,
				'y' => -107,
				'z' => -53,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "St Helena - Ascension Island",
			'Remarks' => "Derived at 2 satellite stations.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}