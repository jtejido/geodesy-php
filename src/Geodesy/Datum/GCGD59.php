<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class GCGD59 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Grand Cayman Geodetic Datum 1959",
			'CRS' => 4723,
			'TranslationVectors' => array(
				'x' => -67.8,
				'y' => -106.1,
				'z' => -138.8,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Cayman Islands - Grand Cayman",
			'Remarks' => "Determined from 6 satellite stations.",
			'Source' => "Clifford J.Mugnier in Photogrammetric Engineering and Remote Sensing, November 1998.",
			'Scope' => "Topographic survey. Accuracy +/- 1m.",
			'Origin' => "Fundamental point: GC1. Latitude: 19 degrees 17 minutes 54.43 seconds N, longitude: 81 degrees 22 minutes 37.17 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}