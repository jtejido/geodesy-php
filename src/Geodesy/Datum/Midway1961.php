<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Midway1961 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Midway 1961",
			'CRS' => 4727,
			'TranslationVectors' => array(
				'x' => -912,
				'y' => 58,
				'z' => -1227,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Midway Islands - Sand and Eastern Islands",
			'Remarks' => "Derived at 1 satellite station. Information source states 'provided for historical purposes only. These parameter [values] should not be used'. Replaced by Midway 1961 to WGS 84 (2) (tfm code 15818).",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military and topographic mapping. Accuracy +/- 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}