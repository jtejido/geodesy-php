<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Aden1925 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Aden 1925",
			'CRS' => 6881,
			'TranslationVectors' => array(
				'x' => 24,
				'y' => 203,
				'z' => -268,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Yemen - South Yemen - mainland",
			'Remarks' => "Derivation not given.",
			'Source' => "US NGA GeoTrans software v3.4 and NGA Standard 0036 v1.0.0 of 2014-07-08.",
			'Scope' => "For military purposes. Accuracy not specified.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}