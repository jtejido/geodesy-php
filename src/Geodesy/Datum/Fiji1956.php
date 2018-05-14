<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Fiji1956 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Fiji 1956",
			'CRS' => 4721,
			'TranslationVectors' => array(
				'x' => -265.025,
				'y' => -384.929,
				'z' => 194.046,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Fiji - main islands",
			'Remarks' => "Derived at 20 stations. Also published by NGA in GeoTrans v3.4 software with parameter values rounded to integer.",
			'Source' => "UK Defence Geographic Centre",
			'Scope' => "For military purposes. Accuracy 5m, 3m and 2m in X, Y and Z axes.",
			'Origin' => "Latitude origin was obtained astronomically at station Rasusuva = 17 degrees 49 minutes 03.13 seconds S,  longitude origin was obtained astronomically at station Suva = 178 degrees 25 minutes 35.835 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}