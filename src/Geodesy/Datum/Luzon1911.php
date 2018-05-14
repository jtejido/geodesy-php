<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class Luzon1911 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Luzon 1911",
			'CRS' => 4253,
			'TranslationVectors' => array(
				'x' => 133,
				'y' => 77,
				'z' => 51,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Philippines - onshore",
			'Remarks' => "Derived at 6 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 8m, 11m and 9m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Balacan. Latitude: 13 degrees 33 minutes 41.000 seconds N, longitude: 121 degrees 52 minutes 03.000 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}