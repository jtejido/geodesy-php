<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class HongKong196367 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Hong Kong 1963(67)",
			'CRS' => 4739,
			'TranslationVectors' => array(
				'x' => 156,
				'y' => 271,
				'z' => 189,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "China - Hong Kong",
			'Remarks' => "Derived at 2 satellite stations. Care: does not use Hong Kong 1963 (code 4838) as the source CRS.",
			'Source' => "UK Hydrographic office and DMA / NIMA / NGA TR8350.2 (3rd edition, Amendment 1, 3 January 2000)",
			'Scope' => "Military mapping. Accuracy +/- 1m.",
			'Origin' => "Fundamental point: Trig  seconds Zero seconds , 38.4 feet south along the transit circle of the Kowloon Observatory. Latitude 22 degrees 18 minutes 12.82 seconds N, longitude 114 degrees 10 minutes 18.75 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}