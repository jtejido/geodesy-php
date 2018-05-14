<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class JAD2001 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Jamaica 2001",
			'CRS' => 4758,
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
			'Area' => "Jamaica",
			'Remarks' => "",
			'Source' => "National Land Agency",
			'Scope' => "For all practical purposes JAD2001 can be considered to be coincident with WGS 84.",
			'Origin' => "Aligned to WGS 84.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}