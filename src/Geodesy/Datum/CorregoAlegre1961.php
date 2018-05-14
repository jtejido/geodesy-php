<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class CorregoAlegre1961 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Corrego Alegre 1961",
			'CRS' => 5524,
			'TranslationVectors' => array(
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Brazil - Corrego Alegre 1961",
			'Remarks' => "Parameters from Corrego Alegre 1961 to SIRGAS 2000 (1) (tfm code 5525) assuming that SIRGAS 2000 and WGS 84 are equal within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Accuracy 2m.",
			'Origin' => "Fundamental point: Corrego Alegre. Latitude: 19 degrees 50 minutes 14.91 seconds S, longitude: 48 degrees 57 minutes 41.98 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}