<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Grenada1953 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Grenada 1953",
			'CRS' => 4603,
			'TranslationVectors' => array(
				'x' => -72,
				'y' => -213.7,
				'z' => -93,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Grenada and southern Grenadines - onshore",
			'Remarks' => "",
			'Source' => "Ordnance Survey of Great Britain",
			'Scope' => "?",
			'Origin' => "Fundamental point: station GS8, Sante Marie.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}