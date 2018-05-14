<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class HeratNorth extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Herat North",
			'CRS' => 4255,
			'TranslationVectors' => array(
				'x' => 333,
				'y' => 222,
				'z' => -114,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Afghanistan",
			'Remarks' => "Accuracy estimate not available.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes only.",
			'Origin' => "Fundamental point: Herat North. Latitude: 34 degrees 23 minutes 09.08 seconds N, longitude: 64 degrees 10 minutes 58.94 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}