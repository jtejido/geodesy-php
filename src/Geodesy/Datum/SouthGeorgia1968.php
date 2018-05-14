<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class SouthGeorgia1968 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "South Georgia 1968",
			'CRS' => 4722,
			'TranslationVectors' => array(
				'x' => 794,
				'y' => -119,
				'z' => 298,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "South Georgia - onshore",
			'Remarks' => "Determined from 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military and topographic mapping. Accuracy +/- 25m in each axis.",
			'Origin' => "Fundamental point: ISTS 061.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}