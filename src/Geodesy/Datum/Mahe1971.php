<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Mahe1971 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Mahe 1971",
			'CRS' => 4256,
			'TranslationVectors' => array(
				'x' => -41,
				'y' => 220,
				'z' => 134,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Seychelles - Mahe Island",
			'Remarks' => "Derived at 1 station.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Station SITE. Latitude: 4 degrees 40 minutes 14.644 seconds S, longitude: 55 degrees 28 minutes 44.488 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}