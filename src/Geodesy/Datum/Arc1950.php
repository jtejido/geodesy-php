<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880Arc;

class Arc1950 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Arc 1950",
			'CRS' => 4209,
			'TranslationVectors' => array(
				'x' => 142,
				'y' => 96,
				'z' => 293,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Africa - Botswana, Malawi, Zambia, Zimbabwe",
			'Remarks' => "Derived at 10 stations. Replaced by Arc 1950 to WGS 84 (10), tfm code 6906.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 5m, 8m and 11m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Buffelsfontein. Latitude: 33 degrees 59 minutes 32.000 seconds S, longitude: 25 degrees 30 minutes 44.622 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880Arc);
	}

}