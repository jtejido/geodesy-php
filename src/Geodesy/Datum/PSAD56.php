<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class PSAD56 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Provisional South American Datum 1956",
			'CRS' => 4248,
			'TranslationVectors' => array(
				'x' => 270.933,
				'y' => -115.599,
				'z' => 360.226,
			),
			'RotationalVectors' => array(
				'x' => -5.266,
				'y' => -1.238,
				'z' => 2.381,
			),
			'Scale' => 5.109,
			'Area' => "South America - PSAD56 by country",
			'Remarks' => "Parameter values are from PSAD56 to REGVEN (1) (code 1769) assuming that REGVEN is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Spatial referencing.",
			'Origin' => "Fundamental point: La Canoa. Latitude: 8 degrees 34 minutes 17.170 seconds N, longitude: 63 degrees 51 minutes 34.880 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}