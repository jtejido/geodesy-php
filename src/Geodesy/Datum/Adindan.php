<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Adindan extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Adindan",
			'CRS' => 4201,
			'TranslationVectors' => array(
				'x' => 166,
				'y' => 15,
				'z' => -204,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Africa - Eritrea, Ethiopia, South Sudan and Sudan",
			'Remarks' => "Derived at 22 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy 5m in each axis.",
			'Origin' => "Fundamental point: Station 15; Adindan. Latitude: 22 degrees 10 minutes 07.110 seconds N, longitude: 31 degrees 29 minutes 21.608 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}