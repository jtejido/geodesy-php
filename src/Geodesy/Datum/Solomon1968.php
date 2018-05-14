<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Solomon1968 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Solomon 1968",
			'CRS' => 4718,
			'TranslationVectors' => array(
				'x' => -230,
				'y' => 199,
				'z' => 752,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Solomon Islands - onshore main islands",
			'Remarks' => "Derived at 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military and topographic mapping. Accuracy +/- 25m in each axis.",
			'Origin' => "Fundamental point: GUX 1.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}