<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class Segara extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Gunung Segara",
			'CRS' => 4613,
			'TranslationVectors' => array(
				'x' => 403,
				'y' => -684,
				'z' => -41,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Indonesia - Kalimantan E",
			'Remarks' => "Accuracy estimate not available.",
			'Source' => "U.S. National Imagery and Mapping Agency TR8350.2 revision of October 1997; http://earth-info.nga.mil/GandG/",
			'Scope' => "For military purposes.",
			'Origin' => "Station P5 (Gunung Segara). Latitude 0 degrees 32 minutes 12.83 seconds S, longitude 117 degrees 08 minutes 48.47 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}