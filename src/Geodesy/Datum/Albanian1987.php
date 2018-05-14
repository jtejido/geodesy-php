<?php

namespace Geodesy\Datum;

use Geodesy\Models\Krassowsky1940;

class Albanian1987 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Albanian 1987",
			'CRS' => 4191,
			'TranslationVectors' => array(
				'x' => 44.183,
				'y' => 0.58,
				'z' => 38.489,
			),
			'RotationalVectors' => array(
				'x' => -2.3867,
				'y' => -2.7072,
				'z' => 3.5196,
			),
			'Scale' => 8.2703,
			'Area' => "Albania - onshore",
			'Remarks' => "Parameter values from Albanian 1987 to ETRS89 (1) (code 7833). Assumes ETRS89 and WGS 84 can be considered the same to within the accuracy of the transformation.",
			'Source' => "IOGP",
			'Scope' => "Use only for horizontal coordinates; geoid heights must be calculated with ALBGEO3 software.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Krassowsky1940);
	}

}