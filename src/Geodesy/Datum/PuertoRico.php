<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class PuertoRico extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Puerto Rico",
			'CRS' => 4139,
			'TranslationVectors' => array(
				'x' => -11,
				'y' => -72,
				'z' => 101,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Caribbean - Puerto Rico and Virgin Islands - onshore",
			'Remarks' => "Derived at 11 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy 3m in each axis.",
			'Origin' => "Fundamental point: Cardona Island Lighthouse. Latitude:17 degrees 57 minutes 31.40 seconds N, longitude: 66 degrees 38 minutes 07.53 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}