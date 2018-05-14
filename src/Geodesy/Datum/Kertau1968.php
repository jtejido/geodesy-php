<?php

namespace Geodesy\Datum;

use Geodesy\Models\Everest1830Modified;

class Kertau1968 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Kertau 1968",
			'CRS' => 4245,
			'TranslationVectors' => array(
				'x' => 11,
				'y' => -851,
				'z' => -5,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Asia - Malaysia (west including SCS) and Singapore",
			'Remarks' => "Derived at 6 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 10m, 8m and 6m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Kertau. Latitude: 3 degrees 27 minutes 50.710 seconds N, longitude: 102 degrees 37 minutes 24.550 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Everest1830Modified);
	}

}