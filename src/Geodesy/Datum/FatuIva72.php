<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class FatuIva72 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Fatu Iva 72",
			'CRS' => 4688,
			'TranslationVectors' => array(
				'x' => -347.103,
				'y' => -1078.125,
				'z' => -2623.922,
			),
			'RotationalVectors' => array(
				'x' => 33.8875,
				'y' => -70.6773,
				'z' => 9.3943,
			),
			'Scale' => -186.074,
			'Area' => "French Polynesia - Marquesas Islands - Fatu Hiva",
			'Remarks' => "Approximation at the +/- 1m level assuming that RGPF is equivalent to WGS 84. Parameter values taken from Fatu Iva 72 to RGPF (1) (tfm code 15760).",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 2 metres.",
			'Origin' => "Fundamental point: Latitude: 9 degrees 25 minutes 58.00 seconds S, longitude: 138 degrees 55 minutes 06.25 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}