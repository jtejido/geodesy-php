<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880Benoit;

class Palestine1923 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Palestine 1923",
			'CRS' => 4281,
			'TranslationVectors' => array(
				'x' => 275.7224,
				'y' => -94.7824,
				'z' => -340.8944,
			),
			'RotationalVectors' => array(
				'x' => -8.001,
				'y' => -4.42,
				'z' => -11.821,
			),
			'Scale' => -1,
			'Area' => "Asia - Middle East - Israel, Jordan and Palestine onshore",
			'Remarks' => "Not recognised by Survey of Israel. See Palestine 1923 to WGS 84 (2) (code 8650).",
			'Source' => "Various industry sources",
			'Scope' => "Oil Exploration. Accuracy: 1m to north and 5m to south of east-west line through Beersheba (31?15'N).",
			'Origin' => "Fundamental point: Point 82 minutes M  Jerusalem. Latitude: 31 degrees 44 minutes  2.749 seconds N, longitude: 35 degrees 12 minutes 43.490 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880Benoit);
	}

}