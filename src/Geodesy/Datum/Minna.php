<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Minna extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Minna",
			'CRS' => 4263,
			'TranslationVectors' => array(
				'x' => 81,
				'y' => 84,
				'z' => -115,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Nigeria",
			'Remarks' => "Derived at 2 stations. Note: Minna is used in Nigeria, not Cameroon.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Minna base station L40. Latitude: 9 degrees 38 minutes 08.87 seconds N, longitude: 6 degrees 30 minutes 58.76 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}