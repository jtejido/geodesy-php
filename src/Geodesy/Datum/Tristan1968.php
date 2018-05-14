<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Tristan1968 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Tristan 1968",
			'CRS' => 4734,
			'TranslationVectors' => array(
				'x' => 632,
				'y' => -438,
				'z' => 609,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "St Helena - Tristan da Cunha",
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