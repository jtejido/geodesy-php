<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class Guam1963 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Guam 1963",
			'CRS' => 4675,
			'TranslationVectors' => array(
				'x' => 100,
				'y' => 248,
				'z' => -259,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Guam - onshore",
			'Remarks' => "Derived at 5 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy 3m in each axis.",
			'Origin' => "Fundamental point: Tagcha. Latitude: 13 degrees 22 minutes 38.49 seconds N, longitude: 144 degrees 45 minutes 51.56 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}