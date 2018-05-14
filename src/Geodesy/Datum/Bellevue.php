<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Bellevue extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Bellevue",
			'CRS' => 4714,
			'TranslationVectors' => array(
				'x' => 127,
				'y' => 769,
				'z' => -472,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Vanuatu - southern islands",
			'Remarks' => "Derived at 3 satellite stations.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military and topographic mapping; Accuracy +/- 20 m in each axis",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}