<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Moorea87 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Moorea 87",
			'CRS' => 4691,
			'TranslationVectors' => array(
				'x' => -215.525,
				'y' => -149.593,
				'z' => -176.229,
			),
			'RotationalVectors' => array(
				'x' => 3.2624,
				'y' => 1.692,
				'z' => 1.1571,
			),
			'Scale' => -10.4773,
			'Area' => "French Polynesia - Society Islands - Moorea",
			'Remarks' => "Approximation at the +/- 1m level assuming that RGPF is equivalent to WGS 84. Parameter values taken from Moorea 87 to RGPF (1) (tfm code 15757).",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "Two stations on Tahiti whose coordinates from the Tahiti 1979 adjustment were held fixed.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}