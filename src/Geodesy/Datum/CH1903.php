<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class CH1903 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "CH1903+",
			'CRS' => 4150,
			'TranslationVectors' => array(
				'x' => -674.374,
				'y' => -15.056,
				'z' => -405.346,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Europe - Liechtenstein and Switzerland",
			'Remarks' => "Parameter values are from CH1903+ to CHTRF95 (1) (code 1509) assuming that CHTRF95 is equivalent to WGS 84. That transformation is also given as CH1903+ to ETRS89 (1) (code 1647). CHTRF95 is a realisation of ETRS89.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level.",
			'Origin' => "Fundamental point: Zimmerwald observatory.",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}