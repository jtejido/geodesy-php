<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class Tokyo extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Tokyo",
			'CRS' => 4301,
			'TranslationVectors' => array(
				'x' => 146,
				'y' => -507,
				'z' => -687,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Asia - Japan and Korea",
			'Remarks' => "Derived at 29 stations. Replaced by Tokyo to WGS 84 (5) (code 1305).",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes only. Accuracy 8m, 5m and 8m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Nikon-Keido-Genten. Latitude: 35 degrees 39 minutes 17.5148 seconds N, longitude: 139 degrees 44 minutes 40.5020 seconds E (of Greenwich). Longitude derived in 1918.",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}