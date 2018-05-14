<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Bioko extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Bioko",
			'CRS' => 6883,
			'TranslationVectors' => array(
				'x' => 235,
				'y' => 110,
				'z' => -393,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Equatorial Guinea - Bioko",
			'Remarks' => "Derived at 6 stations.",
			'Source' => "US NGA GeoTrans software v3.4 and NGA Standard 0036 v1.0.0 of 2014-07-08.",
			'Scope' => "For military purposes. Accuracy 5m, 17m and 38m in X, Y and Z axes.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}