<?php

namespace Geodesy\Datum;

use Geodesy\Models\Krassowsky1940;

class Lao1997 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Lao National Datum 1997",
			'CRS' => 4678,
			'TranslationVectors' => array(
				'x' => -44.585,
				'y' => 131.212,
				'z' => 39.544,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Laos",
			'Remarks' => "Derived at 25 stations.",
			'Source' => "National Geographic Department",
			'Scope' => "Accuracy 5m.",
			'Origin' => "Fundamental point: Vientiane (Nongteng) Astro Pillar. Latitude: 18 degrees 01 minutes 31.3480 seconds N, longitude: 102 degrees 30 minutes 57.1376 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Krassowsky1940);
	}

}