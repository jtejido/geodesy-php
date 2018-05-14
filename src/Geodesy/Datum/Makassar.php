<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class Makassar extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Makassar",
			'CRS' => 4257,
			'TranslationVectors' => array(
				'x' => 587.8,
				'y' => -519.75,
				'z' => -145.76,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Indonesia - Sulawesi SW",
			'Remarks' => "",
			'Source' => "Shell",
			'Scope' => "Oil exploration.",
			'Origin' => "Fundamental point: station P1, Moncongloe. Latitude: 5 degrees 08 minutes 41.42 seconds S, long 119 degrees 24 minutes 14.94 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}