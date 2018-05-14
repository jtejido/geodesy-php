<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class Yoff extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Yoff",
			'CRS' => 4310,
			'TranslationVectors' => array(
				'x' => 30,
				'y' => -190,
				'z' => -89,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Senegal",
			'Remarks' => "Derived at 7 stations.",
			'Source' => "US NGA GeoTrans software v3.4 and NGA Standard 0036 v1.0.0 of 2014-07-08.",
			'Scope' => "For military purposes only. Accuracy 3m in each axis.",
			'Origin' => "Fundamental point: Yoff. Latitude: 14 degrees 44 minutes 41.62 seconds N, longitude: 17 degrees 29 minutes 07.02 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880IGN);
	}

}