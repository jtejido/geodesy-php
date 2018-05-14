<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Antigua1943 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Antigua 1943",
			'CRS' => 4601,
			'TranslationVectors' => array(
				'x' => 270,
				'y' => -13,
				'z' => -62,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Antigua - onshore",
			'Remarks' => "Determined from 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military mapping. Accuracy +/- 25m in each axis.",
			'Origin' => "Fundamental point: station A14.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}