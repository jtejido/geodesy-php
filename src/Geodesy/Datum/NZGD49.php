<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class NZGD49 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "New Zealand Geodetic Datum 1949",
			'CRS' => 4272,
			'TranslationVectors' => array(
				'x' => -84,
				'y' => 22,
				'z' => -209,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "New Zealand - onshore and nearshore",
			'Remarks' => "Derived at 14 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy 5m, 3m and 5m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Papatahi. Latitude: 41 degrees 19 minutes  8.900 seconds S, longitude: 175 degrees 02 minutes 51.000 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}