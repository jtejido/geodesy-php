<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class PSD93 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "PDO Survey Datum 1993",
			'CRS' => 4134,
			'TranslationVectors' => array(
				'x' => 180.624,
				'y' => 225.516,
				'z' => -173.919,
			),
			'RotationalVectors' => array(
				'x' => -0.81,
				'y' => -1.898,
				'z' => 8.336,
			),
			'Scale' => -16.71006,
			'Area' => "Oman - onshore",
			'Remarks' => "Replaced PSD93 to WGS 84 (2) (code 8581) in 1997.",
			'Source' => "Petroleum Development Oman",
			'Scope' => "Oil exploration. Residuals 0.5m at 67% probability level.",
			'Origin' => "Adjustment best fitted to Fahud network.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}