<?php

namespace Geodesy\Datum;

use Geodesy\Models\AustralianNationalSpheroid;

class CocosIslands1965 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Cocos Islands 1965",
			'CRS' => 4708,
			'TranslationVectors' => array(
				'x' => 491,
				'y' => 22,
				'z' => -435,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Cocos (Keeling) Islands - onshore",
			'Remarks' => "Derived at 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Anna 1.",
		);

	public function __construct()
	{
		parent::__construct(new AustralianNationalSpheroid);
	}

}