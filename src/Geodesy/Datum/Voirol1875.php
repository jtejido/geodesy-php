<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class Voirol1875 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Voirol 1875",
			'CRS' => 4304,
			'TranslationVectors' => array(
				'x' => 73,
				'y' => 247,
				'z' => -227,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Algeria - north of 32?N",
			'Remarks' => "Accuracy estimate not available.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes.",
			'Origin' => "Fundamental point: Voirol. Latitude: 36 degrees 45 minutes 07.927 seconds N, longitude: 3 degrees 02 minutes 49.435 seconds E of Greenwich. Uses RGS (and old IGN) value of 2 degrees 20 minutes 13.95 seconds for Greenwich-Paris meridian difference.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880IGN);
	}

}