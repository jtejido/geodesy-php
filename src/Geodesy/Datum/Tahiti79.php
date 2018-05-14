<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Tahiti79 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Tahiti 79",
			'CRS' => 4690,
			'TranslationVectors' => array(
				'x' => -221.525,
				'y' => -152.948,
				'z' => -176.768,
			),
			'RotationalVectors' => array(
				'x' => 2.3847,
				'y' => 1.3896,
				'z' => 0.877,
			),
			'Scale' => -11.4741,
			'Area' => "French Polynesia - Society Islands - Tahiti",
			'Remarks' => "Approximation at the +/- 1m level assuming that RGPF is equivalent to WGS 84. Parameter values taken from Tahiti 79 to RGPF (1) (tfm code 15756).",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "Fundamental point: Tahiti North Base. Latitude: 17 degrees 38 minutes 10.0 seconds S, longitude: 149 degrees 36 minutes 57.8 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}