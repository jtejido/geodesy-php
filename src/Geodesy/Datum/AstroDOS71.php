<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class AstroDOS71 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Astro DOS 71",
			'CRS' => 4710,
			'TranslationVectors' => array(
				'x' => 320,
				'y' => -550,
				'z' => 494,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "St Helena - St Helena Island",
			'Remarks' => "Derived at 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: DOS 71/4, Ladder Hill Fort, latitude: 15 degrees 55 minutes 30 seconds S, longitude: 5 degrees 43 minutes 25 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}