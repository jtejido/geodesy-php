<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class DeceptionIsland extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Deception Island",
			'CRS' => 4736,
			'TranslationVectors' => array(
				'x' => -260,
				'y' => -12,
				'z' => 147,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Antarctica - Deception Island",
			'Remarks' => "",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Scientific mapping. Accuracy +/- 20m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}