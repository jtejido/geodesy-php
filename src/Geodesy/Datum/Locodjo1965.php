<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Locodjo1965 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Locodjo 1965",
			'CRS' => 4142,
			'TranslationVectors' => array(
				'x' => 125,
				'y' => -53,
				'z' => -467,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Cote d'Ivoire (Ivory Coast)",
			'Remarks' => "",
			'Source' => "IGN Paris",
			'Scope' => "?",
			'Origin' => "Fundamental point: T5 Banco. Latitude: 5 degrees 18 minutes 50.5 seconds N, longitude: 4 degrees 02 minutes 05.1 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}