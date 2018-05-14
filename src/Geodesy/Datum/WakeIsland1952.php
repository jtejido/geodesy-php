<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class WakeIsland1952 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Wake Island 1952",
			'CRS' => 4733,
			'TranslationVectors' => array(
				'x' => -276,
				'y' => 57,
				'z' => -149,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Wake - onshore",
			'Remarks' => "Derived at 2 satellite stations.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "For military and topographic mapping. Accuracy +/-25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}