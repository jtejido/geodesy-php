<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Camacupa extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Camacupa",
			'CRS' => 4220,
			'TranslationVectors' => array(
				'x' => 93.799,
				'y' => 132.737,
				'z' => 219.073,
			),
			'RotationalVectors' => array(
				'x' => 1.844,
				'y' => -0.648,
				'z' => 6.37,
			),
			'Scale' => 0.169,
			'Area' => "Angola - Angola proper",
			'Remarks' => "Derived by Univ. of Lisbon for IGCA using 38 REPANGOL points in Angola (except SE) and Cabinda. Application differs from Camacupa to WGS 84 (1) to (10) by approx 25 m. Average horizontal error 1m, vertical 3m; max radial error 6m.  For onshore use only.",
			'Source' => "IOGP",
			'Scope' => "Onshore use only.",
			'Origin' => "Fundamental point: Campo de Avia degrees ao. Latitude: 12 degrees 01 minutes 09.070 seconds S, Longitude = 17 degrees 27 minutes 19.800 seconds E (of Greenwich)",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}