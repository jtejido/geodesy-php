<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class IKBD92 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Iraq-Kuwait Boundary Datum 1992",
			'CRS' => 4667,
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
			'Area' => "Asia - Middle East - Iraq-Kuwait boundary",
			'Remarks' => "For all practical purposes this transformation is exact.",
			'Source' => "OGP",
			'Scope' => "Boundary demarcation.",
			'Origin' => "Four stations established between September and December 1991 determined by GPS and Doppler observations.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}