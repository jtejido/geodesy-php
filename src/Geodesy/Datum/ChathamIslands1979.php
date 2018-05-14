<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class ChathamIslands1979 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Chatham Islands Datum 1979",
			'CRS' => 4673,
			'TranslationVectors' => array(
				'x' => -174.05,
				'y' => 25.49,
				'z' => -112.57,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => -0.554,
			),
			'Scale' => -0.2263,
			'Area' => "New Zealand - Chatham Islands group",
			'Remarks' => "Derived at 4 stations using concatenation through WGS72. Parameter vales are also used to transform CI1979 to NZGD2000 - see tfm code 1082.",
			'Source' => "Land Information New Zealand: LINZS25000 Standard for New Zealand Geodetic Datum 2000; 16 November 2007.",
			'Scope' => "For applications requiring 2m accuracy.",
			'Origin' => "Fundamental point: station Astro. Latitude: 43 degrees 57 minutes 23.60 seconds S, longitude: 176 degrees 34 minutes 28.65 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}