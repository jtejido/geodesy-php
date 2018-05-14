<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class PhoenixIslands1966 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Phoenix Islands 1966",
			'CRS' => 4716,
			'TranslationVectors' => array(
				'x' => -298,
				'y' => 304,
				'z' => 375,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Kiribati - Phoenix Islands",
			'Remarks' => "Derived at 4 satellite stations.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military and topographic mapping. Accuracy +/- 15 m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}