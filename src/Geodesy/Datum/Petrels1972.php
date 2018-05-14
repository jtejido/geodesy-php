<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Petrels1972 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Petrels 1972",
			'CRS' => 4636,
			'TranslationVectors' => array(
				'x' => -365,
				'y' => -194,
				'z' => -166,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Antarctica - Adelie Land - Petrels island",
			'Remarks' => "",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "Fundamental point: Astro station DZ on Ile de Petrels. Latitude: 66 degrees 40 minutes 00 seconds S, longitude: 140 degrees 00 minutes 46 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}