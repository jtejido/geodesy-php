<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class Bermuda1957 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Bermuda 1957",
			'CRS' => 4216,
			'TranslationVectors' => array(
				'x' => 73,
				'y' => -213,
				'z' => -296,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Bermuda - onshore",
			'Remarks' => "Derived at 3 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 20m in each axis.",
			'Origin' => "Fundamental point: Fort George base. Latitude 32 degrees 22 minutes 44.36 seconds N, longitude 64 degrees 40 minutes 58.11 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}