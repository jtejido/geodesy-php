<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class Carthage extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Carthage",
			'CRS' => 4223,
			'TranslationVectors' => array(
				'x' => 263,
				'y' => -6,
				'z' => -431,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Tunisia",
			'Remarks' => "Derived at 5 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 6m, 9m and 8m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Carthage. Latitude: 40.9464506g = 36 degrees 51 minutes 06.50 seconds N, longitude: 8.8724368g E of Paris = 10 degrees 19 minutes 20.72 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880IGN);
	}

}