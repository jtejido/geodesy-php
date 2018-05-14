<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class IwoJima1945 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Iwo Jima 1945",
			'CRS' => 4709,
			'TranslationVectors' => array(
				'x' => -145,
				'y' => -75,
				'z' => 272,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Japan - Iwo Jima",
			'Remarks' => "Derived at 1 satellite station.",
			'Source' => "DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Beacon  seconds E seconds .",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}