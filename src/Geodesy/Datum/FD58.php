<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class FD58 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Final Datum 1958",
			'CRS' => 4132,
			'TranslationVectors' => array(
				'x' => 239.1,
				'y' => 170.02,
				'z' => -397.5,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Iran - FD58",
			'Remarks' => "Derived by Geoid for Elf in 1999. EGM96 geoid used.",
			'Source' => "TotalFinaElf",
			'Scope' => "Oil Exploration",
			'Origin' => "Fundamental point: Maniyur.  Latitude: 31 degrees 23 minutes 59.19 seconds N, longitude: 48 degrees 32 minutes 31.38 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}