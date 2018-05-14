<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Jouik1961 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Jouik 1961",
			'CRS' => 4679,
			'TranslationVectors' => array(
				'x' => 80.01,
				'y' => -253.26,
				'z' => -291.19,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Mauritania - north coast",
			'Remarks' => "Derived at 5 points in 2002.",
			'Source' => "Woodside",
			'Scope' => "Hydrographic survey",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}