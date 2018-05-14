<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class CorregoAlegre197072 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Corrego Alegre 1970-72",
			'CRS' => 4225,
			'TranslationVectors' => array(
				'x' => 206,
				'y' => -172,
				'z' => 6,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Brazil - Corrego Alegre 1970-1972",
			'Remarks' => "Derived at 17 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 5m, 3m and 5m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Corrego Alegre. Latitude: 19 degrees 50 minutes 14.91 seconds S, longitude: 48 degrees 57 minutes 41.98 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}