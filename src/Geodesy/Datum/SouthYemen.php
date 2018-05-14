<?php

namespace Geodesy\Datum;

use Geodesy\Models\Krassowsky1940;

class SouthYemen extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "South Yemen",
			'CRS' => 4164,
			'TranslationVectors' => array(
				'x' => 76,
				'y' => 138,
				'z' => -67,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Yemen - South Yemen - mainland",
			'Remarks' => "Parameter values taken from South Yemen to Yemen NGN96 (1) (code 1539) assuming that NGN96 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 5m level.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Krassowsky1940);
	}

}