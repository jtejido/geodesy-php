<?php

namespace Geodesy\Datum;

use Geodesy\Models\Hough1960;

class MarshallIslands1960 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Marshall Islands 1960",
			'CRS' => 4732,
			'TranslationVectors' => array(
				'x' => -102,
				'y' => -52,
				'z' => 38,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Pacific - Marshall Islands, Wake - onshore",
			'Remarks' => "Derived at 10 satellite stations.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "For military and topographic mapping. Accuracy +/-3 m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Hough1960);
	}

}