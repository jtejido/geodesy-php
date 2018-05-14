<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Leigon extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Leigon",
			'CRS' => 4250,
			'TranslationVectors' => array(
				'x' => 130,
				'y' => -29,
				'z' => -364,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Ghana",
			'Remarks' => "Derived at 8 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes. Accuracy 2m, 3m and 2m in X, Y and Z axes.",
			'Origin' => "Fundamental point: GCS Station 121, Leigon. Latitude: 5 degrees 38 minutes 52.27 seconds N, longitude: 0 degrees 11 minutes 46.08 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}