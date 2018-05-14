<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class DeirezZor extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Deir ez Zor",
			'CRS' => 4227,
			'TranslationVectors' => array(
				'x' => 190.421,
				'y' => -8.532,
				'z' => -238.69,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Asia - Middle East - Lebanon and Syria onshore",
			'Remarks' => "Derived for 1998 Omar seismic survey and used in 2000 for El Isba seismic survey.",
			'Source' => "Total",
			'Scope' => "Oil exploration. Accuracy 5m.",
			'Origin' => "Fundamental point: Trig. 254 Deir. Latitude: 35 degrees 21 minutes 49.975 seconds N, longitude: 40 degrees 05 minutes 46.770 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880IGN);
	}

}