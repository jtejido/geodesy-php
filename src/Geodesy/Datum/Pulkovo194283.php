<?php

namespace Geodesy\Datum;

use Geodesy\Models\Krassowsky1940;

class Pulkovo194283 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Pulkovo 1942(83)",
			'CRS' => 4178,
			'TranslationVectors' => array(
				'x' => -28,
				'y' => 121,
				'z' => 77,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Europe - onshore - eastern - S-42(83)",
			'Remarks' => "Derived at 5 stations.",
			'Source' => "U.S. National Imagery and Mapping Agency TR8350.2 revision of October 1997; http://earth-info.nga.mil/GandG/tr8350/tr8350_2.html",
			'Scope' => "For military purposes. Accuracy 2m in each axis.",
			'Origin' => "Fundamental point: Pulkovo observatory. Latitude: 59 degrees 46 minutes 18.550 seconds N, longitude: 30 degrees 19 minutes 42.090 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Krassowsky1940);
	}

}