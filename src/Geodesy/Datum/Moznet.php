<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class Moznet extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Moznet (ITRF94)",
			'CRS' => 4130,
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
			'Area' => "Mozambique",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "For many purposes Moznet can be considered to be coincident with WGS 84. Accuracy better than 1 metre.",
			'Origin' => "ITRF94 at epoch 1996.9",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}