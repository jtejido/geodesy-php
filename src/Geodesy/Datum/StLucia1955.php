<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class StLucia1955 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "St. Lucia 1955",
			'CRS' => 4606,
			'TranslationVectors' => array(
				'x' => 153,
				'y' => -153,
				'z' => -307,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "St Lucia - onshore",
			'Remarks' => "Derived at 3 stations.",
			'Source' => "US NGA GeoTrans software v3.4 and NGA Standard 0036 v1.0.0 of 2014-07-08.",
			'Scope' => "For military purposes only. Accuracy 1m in each axis.",
			'Origin' => "Fundamental point: station DCS3.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}