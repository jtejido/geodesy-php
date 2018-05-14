<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Kusaie1951 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Kusaie 1951",
			'CRS' => 4735,
			'TranslationVectors' => array(
				'x' => -647,
				'y' => -1777,
				'z' => 1124,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Micronesia - Kosrae (Kusaie)",
			'Remarks' => "Derived at 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military and topographic mapping. Accuracy +/- 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}