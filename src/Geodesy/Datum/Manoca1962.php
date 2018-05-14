<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class Manoca1962 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Manoca 1962",
			'CRS' => 4193,
			'TranslationVectors' => array(
				'x' => 70.9,
				'y' => 151.8,
				'z' => 41.4,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Cameroon - coastal area",
			'Remarks' => "Derived at two points, checked at a third by Stolt Comex Seaway and Geoid for Elf.",
			'Source' => "TotalFinaElf",
			'Scope' => "Oil industry",
			'Origin' => "Reservoir centre at the  Manoca tower ( seconds tube Suel seconds ), 3 degrees 51 minutes 49.896 seconds N, 9 degrees 36 minutes 49.347 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880IGN);
	}

}