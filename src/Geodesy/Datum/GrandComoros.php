<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class GrandComoros extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Grand Comoros",
			'CRS' => 4646,
			'TranslationVectors' => array(
				'x' => 963,
				'y' => -510,
				'z' => 359,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Comoros - Njazidja (Grande Comore)",
			'Remarks' => "",
			'Source' => "Service Hydrgraphique et Oceanographique de Maritime (SHOM) of France.",
			'Scope' => "For military purposes. Accuracy unknown.",
			'Origin' => "Fundamental point: M minutes Tsaoueni.  Latitude: 11 degrees 28 minutes 32.200 seconds S, longitude: 43 degrees 15 minutes 42.315 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}