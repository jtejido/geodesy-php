<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class DiegoGarcia1969 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Diego Garcia 1969",
			'CRS' => 4724,
			'TranslationVectors' => array(
				'x' => -208,
				'y' => 435,
				'z' => 229,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "British Indian Ocean Territory - Diego Garcia",
			'Remarks' => "Derived at 2 satellite stations.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military and topographic mapping. Accuracy +/- 25m in each axis.",
			'Origin' => "Fundamental point: ISTS 073.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}