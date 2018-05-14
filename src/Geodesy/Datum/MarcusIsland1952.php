<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class MarcusIsland1952 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Marcus Island 1952",
			'CRS' => 4711,
			'TranslationVectors' => array(
				'x' => -124,
				'y' => 234,
				'z' => 25,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Japan - Minamitori-shima (Marcus Island) - onshore",
			'Remarks' => "Derived at 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "Marcus Island Astronomic Station.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}