<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class Batavia extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Batavia",
			'CRS' => 4211,
			'TranslationVectors' => array(
				'x' => 378.873,
				'y' => -676.002,
				'z' => 46.255,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Indonesia - Java and Java Sea",
			'Remarks' => "Used by ARCO offshore NW Java area.",
			'Source' => "Arco geodetic database",
			'Scope' => "Oil industry operations.",
			'Origin' => "Fundamental point: Longitude at Batavia Astro. Station. Latitude: 6 degrees 07 minutes 39.522 seconds S, longitude: 106 degrees 48 minutes 27.790 seconds E (of Greenwich). Latitude and azimuth at Genuk.",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}