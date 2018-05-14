<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Tahaa54 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Tahaa 54",
			'CRS' => 4629,
			'TranslationVectors' => array(
				'x' => -72.438,
				'y' => -345.918,
				'z' => -79.486,
			),
			'RotationalVectors' => array(
				'x' => -1.6045,
				'y' => -0.8823,
				'z' => -0.5565,
			),
			'Scale' => -1.3746,
			'Area' => "French Polynesia - Society Islands - Bora Bora, Huahine, Raiatea, Tahaa",
			'Remarks' => "Approximation at the +/- 1m level assuming that RGPF is equivalent to WGS 84. Parameter values taken from Tahaa 54 to RGPF (1) (tfm code 15758).",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "Fundamental point: Tahaa East Base. Latitude: 16 degrees 33 minutes 20.97 seconds S, longitude: 151 degrees 29 minutes 06.25 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}