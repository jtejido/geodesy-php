<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class PointeNoire extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Congo 1960 Pointe Noire",
			'CRS' => 4282,
			'TranslationVectors' => array(
				'x' => 148,
				'y' => -51,
				'z' => 291,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Congo",
			'Remarks' => "Derived at 1 station.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Point Noire Astro. Latitude: 4 degrees 47 minutes 00.10 seconds S, longitude: 11 degrees 51 minutes 01.55 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880IGN);
	}

}