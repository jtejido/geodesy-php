<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Barbados1938 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Barbados 1938",
			'CRS' => 4212,
			'TranslationVectors' => array(
				'x' => -31.95,
				'y' => -300.99,
				'z' => -419.19,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Barbados - onshore",
			'Remarks' => "Derived at 2 stations (S40 and M1, St Annes Tower) in 2004.",
			'Source' => "UK Hydrographic Office",
			'Scope' => "Accuracy 2.5m.",
			'Origin' => "Fundamental point: HMS Challenger astro station M1, St. Anne minutes s Tower. Latitude 13 degrees 04 minutes 32.53 seconds N, longitude 59 degrees 36 minutes 29.34 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}