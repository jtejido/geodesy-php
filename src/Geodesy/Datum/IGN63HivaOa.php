<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class IGN63HivaOa extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "IGN63 Hiva Oa",
			'CRS' => 4689,
			'TranslationVectors' => array(
				'x' => -410.721,
				'y' => -55.049,
				'z' => -80.746,
			),
			'RotationalVectors' => array(
				'x' => -2.5779,
				'y' => -2.3514,
				'z' => -0.6664,
			),
			'Scale' => -17.3311,
			'Area' => "French Polynesia - Marquesas Islands - Hiva Oa and Tahuata",
			'Remarks' => "Approximation at the +/- 1m level assuming that RGPF is equivalent to WGS 84. Parameter values taken from IGN63 Hiva Oa to RGPF (1) (tfm code 15761).",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "Fundamental point: Atuona. Latitude: 9 degrees 48 minutes 27.20 seconds S, longitude: 139 degrees 02 minutes 15.45 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}