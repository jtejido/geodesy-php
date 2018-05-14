<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class PRS92 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Philippine Reference System 1992",
			'CRS' => 4683,
			'TranslationVectors' => array(
				'x' => 127.62,
				'y' => 67.24,
				'z' => 47.04,
			),
			'RotationalVectors' => array(
				'x' => 3.068,
				'y' => -4.903,
				'z' => -1.578,
			),
			'Scale' => 1.06,
			'Area' => "Philippines",
			'Remarks' => "Derived during GPS campaign which established PRS92 coordinates at 330 first order stations.",
			'Source' => "National Mapping and Resource Information Authority, Coast and Geodetic Survey Department.",
			'Scope' => "Accuracy: 1-10 parts per million.",
			'Origin' => "Fundamental point: Balacan. Latitude: 13 degrees 33 minutes 41.000 seconds N, longitude: 121 degrees 52 minutes 03.000 seconds E (of Greenwich), geoid-ellipsoid separation 0.34m.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}