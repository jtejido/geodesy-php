<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class Hartebeesthoek94 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Hartebeesthoek94",
			'CRS' => 4148,
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
			'Area' => "South Africa",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "For many purposes Hartebeesthoek94 datum can be considered to be coincident with WGS 84.",
			'Origin' => "Coincident with ITRF91 at epoch 1994.0 at Hartebeesthoek astronomical observatory near Pretoria.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}