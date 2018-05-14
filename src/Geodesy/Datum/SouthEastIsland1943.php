<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class SouthEastIsland1943 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "South East Island 1943",
			'CRS' => 6892,
			'TranslationVectors' => array(
				'x' => 43.685,
				'y' => 179.785,
				'z' => 267.721,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Seychelles - Seychelles Bank",
			'Remarks' => "Derived by UK DOS at 10 stations in 1998, RMS ?0.314m. Also published by NGA in Standard 0036 v1.0.0 of 2014-07-08 and in GeoTrans v3.4 software with parameter values rounded to integer.",
			'Source' => "UK DOS via UK Hydrographic Office.",
			'Scope' => "Topographic mapping.",
			'Origin' => "Fundamental point: Challenger Astro near Port Victoria lighthouse. Latitude: 4 degrees 40 minutes 39.460 seconds S, longitude: 55 degrees 32 minutes 00.166 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}