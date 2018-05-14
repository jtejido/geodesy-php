<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Macao1920 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Macao 1920",
			'CRS' => 8428,
			'TranslationVectors' => array(
				'x' => 202.865,
				'y' => 303.99,
				'z' => 155.873,
			),
			'RotationalVectors' => array(
				'x' => -34.079,
				'y' => 76.126,
				'z' => 32.66,
			),
			'Scale' => -6.096,
			'Area' => "China - Macao",
			'Remarks' => "Derived from Macao 2008 to Macao 1920 (1) (code 8435) (reversed) assuming that Macao 2008 is equivalent to WGS 84 within the accuracy of the transformation. Some parameter values differ in the reverse due to the high rotations.",
			'Source' => "IOGP",
			'Scope' => "Transformation of GNSS coordinates to Macao Grid.",
			'Origin' => "Fundamental point: Avenida Conselheiro Borja base A, later transferred to Monte da Barra, latitude 22 degrees 11 minutes 03.139 seconds N, longitude 113 degrees 31 minutes 43.625 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}