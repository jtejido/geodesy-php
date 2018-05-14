<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class NGN extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "National Geodetic Network",
			'CRS' => 4318,
			'TranslationVectors' => array(
				'x' => 3.2,
				'y' => 5.7,
				'z' => -2.8,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Kuwait - onshore",
			'Remarks' => "",
			'Source' => "KOC",
			'Scope' => "1 metre accuracy.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}