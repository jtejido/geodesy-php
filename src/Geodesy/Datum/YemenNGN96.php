<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class YemenNGN96 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Yemen National Geodetic Network 1996",
			'CRS' => 4163,
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
			'Area' => "Yemen",
			'Remarks' => "",
			'Source' => "IGN Paris",
			'Scope' => "Accuracy better than 1 metre.",
			'Origin' => "Sana minutes a IGN reference marker.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}