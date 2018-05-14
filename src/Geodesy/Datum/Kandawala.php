<?php

namespace Geodesy\Datum;

use Geodesy\Models\Everest18301937Adjustment;

class Kandawala extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Kandawala",
			'CRS' => 4244,
			'TranslationVectors' => array(
				'x' => 97,
				'y' => -787,
				'z' => -86,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Sri Lanka - onshore",
			'Remarks' => "Derived at 3 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 20m in each axis.",
			'Origin' => "Fundamental point: Kandawala. Latitude: 7 degrees 14 minutes 06.838 seconds N, longitude: 79 degrees 52 minutes 36.670 seconds E.",
		);

	public function __construct()
	{
		parent::__construct(new Everest18301937Adjustment);
	}

}