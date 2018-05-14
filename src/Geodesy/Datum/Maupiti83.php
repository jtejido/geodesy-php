<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Maupiti83 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Maupiti 83",
			'CRS' => 4692,
			'TranslationVectors' => array(
				'x' => -217.037,
				'y' => -86.959,
				'z' => -23.956,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "French Polynesia - Society Islands - Maupiti",
			'Remarks' => "Approximation at the +/- 1m level assuming that RGPF is equivalent to WGS 84. Parameter values taken from Maupiti 83 to RGPF (1) (tfm code 15759).",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "Fundamental point: Pitiahe South Base. Latitude: 16 degrees 28 minutes 28.942 seconds S, longitude: 152 degrees 14 minutes 55.059 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}