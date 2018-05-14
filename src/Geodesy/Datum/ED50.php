<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class ED50 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "European Datum 1950",
			'CRS' => 4230,
			'TranslationVectors' => array(
				'x' => 103,
				'y' => 106,
				'z' => 141,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Europe - ED50 by country",
			'Remarks' => "Accuracy estimate not available. Note: ED50 is not used in Israel, Lebanon, Kuwait, Saudi Arabia or Syria.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes only.",
			'Origin' => "Fundamental point: Potsdam (Helmert Tower). Latitude: 52 degrees 22 minutes 51.4456 seconds N, longitude: 13 degrees 03 minutes 58.9283 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}