<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class Korean1985 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Korean Datum 1985",
			'CRS' => 4162,
			'TranslationVectors' => array(
				'x' => 145.907,
				'y' => -505.034,
				'z' => -685.756,
			),
			'RotationalVectors' => array(
				'x' => -1.162,
				'y' => 2.347,
				'z' => 1.592,
			),
			'Scale' => -6.342,
			'Area' => "Korea, Republic of (South Korea) - onshore",
			'Remarks' => "Parameter values from Korean 1985 to Korea 2000 (1) (code 5189). Assumes Korea 2000 and WGS 84 can be considered the same to within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m",
			'Origin' => "Fundamental point: Suwon. Latitude 37 degrees 16 minutes 31.9034 seconds N, longitude 127 degrees 03 minutes 05.1451 seconds E of Greenwich. This is consistent with the Tokyo 1918 datum latitude and longitude.",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}