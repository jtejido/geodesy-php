<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class HuTzuShan1950 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Hu Tzu Shan 1950",
			'CRS' => 4236,
			'TranslationVectors' => array(
				'x' => 637,
				'y' => 549,
				'z' => 203,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Taiwan - onshore",
			'Remarks' => "Derived at 4 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes. Accuracy 15m in each axis.",
			'Origin' => "Fundamental point: Hu Tzu Shan. Latitude: 23 degrees 58 minutes 32.34 seconds N, longitude: 120 degrees 58 minutes 25.975 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}