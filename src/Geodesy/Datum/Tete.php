<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class Tete extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Tete",
			'CRS' => 4127,
			'TranslationVectors' => array(
				'x' => 115.064,
				'y' => 87.39,
				'z' => 101.716,
			),
			'RotationalVectors' => array(
				'x' => 0.058,
				'y' => -4.001,
				'z' => 2.062,
			),
			'Scale' => -9.366,
			'Area' => "Mozambique - onshore",
			'Remarks' => "Parameter values taken from Tete to Moznet (1) (code 1297) assuming that Moznet is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Residuals as high as 30 metres.",
			'Origin' => "Fundamental point: Tete.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}