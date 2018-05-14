<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class KOC extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Kuwait Oil Company",
			'CRS' => 4246,
			'TranslationVectors' => array(
				'x' => 294.7,
				'y' => 200.1,
				'z' => -525.5,
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
			'Origin' => "Fundamental point: K28.  Latitude: 29 degrees 03 minutes 42.348 seconds N, longitude: 48 degrees 08 minutes 42.558 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}