<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880Arc;

class Cape extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Cape",
			'CRS' => 4222,
			'TranslationVectors' => array(
				'x' => 136,
				'y' => 108,
				'z' => 292,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Africa - Botswana, Lesotho, South Africa and Swaziland",
			'Remarks' => "Derived at 5 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 3m, 6m and 6m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Buffelsfontein. Latitude: 33 degrees 59 minutes 32.000 seconds S, longitude: 25 degrees 30 minutes 44.622 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880Arc);
	}

}