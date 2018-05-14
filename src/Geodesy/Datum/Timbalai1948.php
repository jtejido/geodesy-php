<?php

namespace Geodesy\Datum;

use Geodesy\Models\Everest18301967Definition;

class Timbalai1948 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Timbalai 1948",
			'CRS' => 4298,
			'TranslationVectors' => array(
				'x' => 679,
				'y' => -669,
				'z' => 48,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Asia - Brunei and East Malaysia",
			'Remarks' => "Derived at 8 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 10m, 10m and 12m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Station P85 at Timbalai. Latitude: 5 degrees 17 minutes  3.548 seconds N, longitude: 115 degrees 10 minutes 56.409 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Everest18301967Definition);
	}

}