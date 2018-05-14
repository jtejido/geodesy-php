<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class IGCB1955 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Institut Geographique du Congo Belge 1955",
			'CRS' => 4701,
			'TranslationVectors' => array(
				'x' => 79.9,
				'y' => 158,
				'z' => 168.9,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Congo DR (Zaire) - Bas Congo",
			'Remarks' => "Derived by Topnav in 1991 at station TSH 85.",
			'Source' => "Petrofina",
			'Scope' => "Oil exploration. Accuracy 5m.",
			'Origin' => "Fundamental point: Yella east base. Latitude: 6 degrees 00 minutes 53.139 seconds S, longitude: 12 degrees 58 minutes 29.287 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}