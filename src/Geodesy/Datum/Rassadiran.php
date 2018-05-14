<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Rassadiran extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Rassadiran",
			'CRS' => 4153,
			'TranslationVectors' => array(
				'x' => 133.63,
				'y' => 157.5,
				'z' => 158.62,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Iran - Taheri refinery",
			'Remarks' => "Derived in 1998 at Assaluyeh (Taheri refinery) by Geoid for Total. Used for South Pars phases 2 and 3.",
			'Source' => "Total-Fina",
			'Scope' => "Oil industry engineering survey. Used only for terminal site.",
			'Origin' => "Fundamental point: Total1. Latitude: 27 degrees 31 minutes 07.784 seconds N, longitude: 52 degrees 36 minutes 12.741 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}