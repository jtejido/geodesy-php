<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class Conakry1905 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Conakry 1905",
			'CRS' => 4315,
			'TranslationVectors' => array(
				'x' => 23,
				'y' => -259,
				'z' => 9,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Guinea - onshore",
			'Remarks' => "",
			'Source' => "IGN Paris",
			'Scope' => "?",
			'Origin' => "Fundamental point: Conakry. Latitude: 10.573766g N, longitude: 17.833682g W (of Paris).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880IGN);
	}

}