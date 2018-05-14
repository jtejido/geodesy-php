<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class Merchich extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Merchich",
			'CRS' => 4261,
			'TranslationVectors' => array(
				'x' => -31,
				'y' => -146,
				'z' => -47,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Morocco - onshore",
			'Remarks' => "Derived at 9 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 5m, 3m and 3m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Merchich. Latitude: 33 degrees 26 minutes 59.672 seconds N, longitude: 7 degrees 33 minutes 27.295 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880IGN);
	}

}