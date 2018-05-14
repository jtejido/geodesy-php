<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class HTRS96 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Croatian Terrestrial Reference System",
			'CRS' => 4761,
			'TranslationVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Croatia",
			'Remarks' => "Approximation at the +/- 1m level assuming that ETRS89 is equivalent to WGS 84. HTRS96 is a regional realisation of ETRS89.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "Densification of ETRS89 in Croatia at epoch 1995.55.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}