<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class ED79 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "European Datum 1979",
			'CRS' => 4668,
			'TranslationVectors' => array(
				'x' => 86,
				'y' => 98,
				'z' => 119,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Europe - west",
			'Remarks' => "Derived at 22 stations.",
			'Source' => "U.S. National Imagery and Mapping Agency TR8350.2 revision of October 1997; http://earth-info.nga.mil/GandG/",
			'Scope' => "For military purposes. Accuracy 3m in each axis.",
			'Origin' => "Fundamental point: Potsdam (Helmert Tower). Latitude: 52 degrees 22 minutes 51.4456 seconds N, longitude: 13 degrees 03 minutes 58.9283 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}