<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class CampAreaAstro extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Camp Area Astro",
			'CRS' => 4715,
			'TranslationVectors' => array(
				'x' => 104,
				'y' => 129,
				'z' => -239,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Antarctica - Camp McMurdo area",
			'Remarks' => "No accuracy estimate available.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military and scientific mapping.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}