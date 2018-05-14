<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class RT90 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Rikets koordinatsystem 1990",
			'CRS' => 4124,
			'TranslationVectors' => array(
				'x' => -419.3836,
				'y' => -99.3335,
				'z' => -591.3451,
			),
			'RotationalVectors' => array(
				'x' => -0.850389,
				'y' => -1.817277,
				'z' => 7.862238,
			),
			'Scale' => 0.99496,
			'Area' => "Sweden",
			'Remarks' => "Parameter values from RT90 to ETRS89 (1) (code 1437) assuming that ETRS89 is equivalent to WGS 84 within the accuracy of the transformation. Replaced by RT90 to WGS 84 (2) (code 1896) from 2001.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}