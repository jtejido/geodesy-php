<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Santo1965 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Santo 1965",
			'CRS' => 4730,
			'TranslationVectors' => array(
				'x' => -170,
				'y' => -42,
				'z' => -84,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Vanuatu - northern islands",
			'Remarks' => "Derived at 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "For military and topographic mapping. Accuracy 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}