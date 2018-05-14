<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class PicodelasNieves1984 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Pico de las Nieves 1984",
			'CRS' => 4728,
			'TranslationVectors' => array(
				'x' => 307,
				'y' => 92,
				'z' => -127,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Spain - Canary Islands onshore",
			'Remarks' => "Determined at 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military and topographic mapping. Accuracy +/- 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}