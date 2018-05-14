<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Liberia1964 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Liberia 1964",
			'CRS' => 4251,
			'TranslationVectors' => array(
				'x' => 90,
				'y' => -40,
				'z' => -88,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Liberia - onshore",
			'Remarks' => "Derived at 4 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy 15m in each axis.",
			'Origin' => "Fundamental point: Robertsfield. Latitude: 6 degrees 13 minutes 53.02 seconds N, longitude: 10 degrees 21 minutes 35.44 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}