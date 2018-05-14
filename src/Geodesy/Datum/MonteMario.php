<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class MonteMario extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Monte Mario",
			'CRS' => 4265,
			'TranslationVectors' => array(
				'x' => 225,
				'y' => 65,
				'z' => -9,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Italy - including San Marino and Vatican",
			'Remarks' => "Derived at 1 station.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Monte Mario. Latitude: 41 degrees 55 minutes 25.51 seconds N, longitude: 12 degrees 27 minutes 08.4 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}