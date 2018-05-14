<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS72;

class WGS72BE extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "WGS 72 Transit Broadcast Ephemeris",
			'CRS' => 4324,
			'TranslationVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => -1.9,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0.814,
			),
			'Scale' => 0.38,
			'Area' => "World",
			'Remarks' => "",
			'Source' => "",
			'Scope' => "Geodesy.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new WGS72);
	}

}