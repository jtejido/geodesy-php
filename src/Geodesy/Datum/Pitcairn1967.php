<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Pitcairn1967 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Pitcairn 1967",
			'CRS' => 4729,
			'TranslationVectors' => array(
				'x' => -185,
				'y' => -165,
				'z' => -42,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Pitcairn - Pitcairn Island",
			'Remarks' => "Derived at 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military and topographic mapping. Accuracy +/- 25 m in each axis.",
			'Origin' => "Fundamental point: Pitcairn Astro. Latitude: 25 degrees 04 minutes 06.87 seconds S, longitude: 130 degrees 06 minutes 47.83 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}