<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class ED87 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "European Datum 1987",
			'CRS' => 4231,
			'TranslationVectors' => array(
				'x' => 83.11,
				'y' => 97.38,
				'z' => 117.22,
			),
			'RotationalVectors' => array(
				'x' => 0.0276,
				'y' => -0.2167,
				'z' => 0.2147,
			),
			'Scale' => -0.1218,
			'Area' => "Europe - west",
			'Remarks' => "Parameter values taken from ED87 to ETRS89 (1) (tfm code 4078) assuming that ETRS89 is coincident with WGS 84 within the accuracy of the transformation. Used as a tfm between ED50 and WGS 84 - see code 3904.",
			'Source' => "OGP",
			'Scope' => "Scientific research.",
			'Origin' => "Fundamental point: Potsdam (Helmert Tower). Latitude: 52 degrees 22 minutes 51.4456 seconds N, longitude: 13 degrees 03 minutes 58.9283 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}