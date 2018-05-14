<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Tananarive extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Tananarive 1925",
			'CRS' => 4297,
			'TranslationVectors' => array(
				'x' => 189,
				'y' => 242,
				'z' => 91,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Madagascar - onshore and nearshore",
			'Remarks' => "Accuracy estimate not available.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes.",
			'Origin' => "Fundamental point: Tananarive observatory. Latitude: 18 degrees 55 minutes 02.10 seconds S, longitude: 47 degrees 33 minutes 06.75 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}