<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Gambia extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Gambia",
			'CRS' => 6894,
			'TranslationVectors' => array(
				'x' => 63,
				'y' => -176,
				'z' => -185,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Gambia - onshore",
			'Remarks' => "Derived at 1 station.",
			'Source' => "US NGA GeoTrans software v3.4 and NGA Standard 0036 v1.0.0 of 2014-07-08.",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}