<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1967Modified;

class SAD69 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "South American Datum 1969",
			'CRS' => 4618,
			'TranslationVectors' => array(
				'x' => 75,
				'y' => 1,
				'z' => 44,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "South America - SAD69 by country",
			'Remarks' => "Derived at 9 stations. Note: SAD69 not adopted in Chile north of 43?30'S. Replaced by SAD69 to WGS 84 (17) to (19) (codes 6974, 6975 and 6976).",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy 15m, 8m and 11m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Chua. Geodetic latitude: 19 degrees 45 minutes 41.6527 seconds S; geodetic longitude: 48 degrees 06 minutes 04.0639 seconds W (of Greenwich). (Astronomic coordinates: Latitude 19 degrees 45 minutes 41.34 seconds S +/- 0.05 seconds , longitude 48 degrees 06 minutes 07.80 seconds W +/- 0.08 seconds ).",
		);

	public function __construct()
	{
		parent::__construct(new GRS1967Modified);
	}

}