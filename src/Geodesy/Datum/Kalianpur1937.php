<?php

namespace Geodesy\Datum;

use Geodesy\Models\Everest18301937Adjustment;

class Kalianpur1937 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Kalianpur 1937",
			'CRS' => 4144,
			'TranslationVectors' => array(
				'x' => -282,
				'y' => -726,
				'z' => -254,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Asia - Bangladesh; India; Myanmar; Pakistan - onshore",
			'Remarks' => "Derived at 6 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes. Accuracy 10m, 8m and 12m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Kalianpur. Latitude: 24 degrees  07 minutes 11.260 seconds N, longitude: 77 degrees 39 minutes 17.570 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Everest18301937Adjustment);
	}

}