<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class POSGAR94 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Posiciones Geodesicas Argentinas 1994",
			'CRS' => 4694,
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
			'Area' => "Argentina",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Transformation with 1-metre accuracy.",
			'Origin' => "A geodetic network of 127 high accuracy surveyed points based on WGS 84 that define the National Geodetic System (Sistema Geod degrees sico Nacional).",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}