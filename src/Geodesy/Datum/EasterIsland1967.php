<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class EasterIsland1967 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Easter Island 1967",
			'CRS' => 4719,
			'TranslationVectors' => array(
				'x' => -211,
				'y' => -147,
				'z' => -111,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Chile - Easter Island onshore",
			'Remarks' => "Derived at 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military and topographic mapping. Accuracy +/- 25m in each axis",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}