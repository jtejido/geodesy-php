<?php

namespace Geodesy\Datum;

use Geodesy\Models\WarOffice;

class Accra extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Accra",
			'CRS' => 4168,
			'TranslationVectors' => array(
				'x' => 170,
				'y' => -33,
				'z' => -326,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Ghana",
			'Remarks' => "Derived at 4 stations.",
			'Source' => "US NGA GeoTrans software v3.4 and NGA Standard 0036 v1.0.0 of 2014-07-08.",
			'Scope' => "For military purposes. Accuracy 3m, 4m and 3m in X, Y and Z axes.",
			'Origin' => "Fundamental point: GCS Station 547. Latitude: 5 degrees 23 minutes 43.3 seconds N, longitude: 0 degrees 11 minutes 52.3 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new WarOffice);
	}

}