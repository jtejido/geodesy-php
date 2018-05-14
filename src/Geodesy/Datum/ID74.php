<?php

namespace Geodesy\Datum;

use Geodesy\Models\IndonesianNationalSpheroid;

class ID74 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Indonesian Datum 1974",
			'CRS' => 4238,
			'TranslationVectors' => array(
				'x' => 24,
				'y' => 15,
				'z' => -5,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Indonesia - onshore",
			'Remarks' => "Derived at 1 station.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Padang. Latitude: 0 degrees 56 minutes 38.414 seconds S, longitude: 100 degrees 22 minutes  8.804 seconds E (of Greenwich). Ellipsoidal height 3.190m, gravity-related height 14.0m above mean sea level.",
		);

	public function __construct()
	{
		parent::__construct(new IndonesianNationalSpheroid);
	}

}