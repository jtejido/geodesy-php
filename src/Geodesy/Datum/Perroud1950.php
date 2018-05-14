<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Perroud1950 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Pointe Geologie Perroud 1950",
			'CRS' => 4637,
			'TranslationVectors' => array(
				'x' => -325,
				'y' => -154,
				'z' => -172,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Antarctica - Adelie Land coastal area",
			'Remarks' => "",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "Fundamental point: Astro station G.0 on Pointe Geologie. Latitude: 66 degrees 39 minutes 30 seconds S, longitude: 140 degrees 01 minutes 00 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}