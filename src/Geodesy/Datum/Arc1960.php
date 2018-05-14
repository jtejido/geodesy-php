<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Arc1960 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Arc 1960",
			'CRS' => 4210,
			'TranslationVectors' => array(
				'x' => 157,
				'y' => 2,
				'z' => 299,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Africa - Burundi, Kenya, Rwanda, Tanzania and Uganda",
			'Remarks' => "Derived at 24 stations.",
			'Source' => "U.S. National Imagery and Mapping Agency TR8350.2 revision of October 1997; http://earth-info.nga.mil/GandG/tr8350/tr8350_2.html",
			'Scope' => "For military purposes. Accuracy 4m, 3m and 3m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Buffelsfontein. Latitude: 33 degrees 59 minutes 32.000 seconds S, longitude: 25 degrees 30 minutes 44.622 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}