<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Fahud extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Fahud",
			'CRS' => 4232,
			'TranslationVectors' => array(
				'x' => 346,
				'y' => 1,
				'z' => -224,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Oman - mainland",
			'Remarks' => "Derived at 7 stations. Replaced by Fahud to WGS 84 (3) (code 6908).",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes. Accuracy 3m, 3m and 9m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Station NO68-024 Fahud. Latitude: 22 degrees 17 minutes 31.182 seconds N, longitude: 56 degrees 29 minutes 18.820 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}