<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class AyabelleLighthouse extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Ayabelle Lighthouse",
			'CRS' => 4713,
			'TranslationVectors' => array(
				'x' => 79,
				'y' => 129,
				'z' => -145,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Djibouti",
			'Remarks' => "Derived at 1 satellite station. Replaced by Ayabelle Lighthouse to WGS 84 (2) (code 6907).",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Ayabelle Lighthouse.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}