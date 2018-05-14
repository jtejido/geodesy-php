<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Karbala1979 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Karbala 1979",
			'CRS' => 4743,
			'TranslationVectors' => array(
				'x' => -84.1,
				'y' => 320.1,
				'z' => -218.7,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Iraq - onshore",
			'Remarks' => "Derived from shifts in UTM rectangular coordinates for one point in Basra area provided by Iraq National Oil Exploration Company. Replaced by Karbala 1979 to WGS 84 (2) (tfm code 5078).",
			'Source' => "Total",
			'Scope' => "Oil exploration.",
			'Origin' => "Fundamental point: Karbala. Latitude: 32 degrees 34 minutes 14.4941 seconds N, longitude: 44 degrees 00 minutes 49.6379 seconds E.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}