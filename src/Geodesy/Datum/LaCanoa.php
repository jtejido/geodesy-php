<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class LaCanoa extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "La Canoa",
			'CRS' => 4247,
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
			'Area' => "Venezuela - onshore",
			'Remarks' => "Parameter values are from La Canoa to REGVEN (1) (code 1771) assuming that REGVEN is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Spatial referencing.",
			'Origin' => "Fundamental point: La Canoa. Latitude: 8 degrees 34 minutes 17.170 seconds N, longitude: 63 degrees 51 minutes 34.880 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}