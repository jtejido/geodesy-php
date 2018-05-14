<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class NAD27 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "North American Datum 1927",
			'CRS' => 4267,
			'TranslationVectors' => array(
				'x' => 10,
				'y' => -158,
				'z' => -187,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "North America - NAD27",
			'Remarks' => "Derived at 112 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy 15m, 11m and 6m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Meade minutes s Ranch. Latitude: 39 degrees 13 minutes 26.686 seconds N, longitude: 98 degrees 32 minutes 30.506 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}