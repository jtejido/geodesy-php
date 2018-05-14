<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Yacare extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Yacare",
			'CRS' => 4309,
			'TranslationVectors' => array(
				'x' => 155,
				'y' => -171,
				'z' => -37,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Uruguay - onshore",
			'Remarks' => "Accuracy estimate not available.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes.",
			'Origin' => "Fundamental point: Yacare. Latitude: 30 degrees 35 minutes 53.68 seconds S, longitude: 57 degrees 25 minutes 01.30 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}