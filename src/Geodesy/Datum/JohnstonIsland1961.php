<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class JohnstonIsland1961 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Johnston Island 1961",
			'CRS' => 4725,
			'TranslationVectors' => array(
				'x' => -189,
				'y' => 79,
				'z' => 202,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Johnston Island",
			'Remarks' => "Derived at 2 satellite stations. Note: NGA online html files carry a different dZ value - OGP believe this is an erroneous transcription from the TR8350.2 line above.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military and topographic mapping. Accuracy +/- 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}