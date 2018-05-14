<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1967Modified;

class SAD6996 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "South American Datum 1969(96)",
			'CRS' => 5527,
			'TranslationVectors' => array(
				'x' => 67.35,
				'y' => -3.88,
				'z' => 38.22,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Brazil",
			'Remarks' => "Parameter values from SAD69(96) to SIRGAS 2000 (2)) (tfm code 5881) assuming that SIRGAS 2000 and WGS 84 are equal within the accuracy of the transformation, based on SAD69 to SIRGAS 2000 (1)) (tfm code 15485). Used by Petrobras and ANP from 1994.",
			'Source' => "Petrobras.",
			'Scope' => "Accuracy generally better than 1m except in Amazon basin where it degenerates to 5m. Should be used only to transform data obtained independently of the classical geodetic network (GPS observations conducted after 1994).",
			'Origin' => "Fundamental point: Chua. Geodetic latitude: 19 degrees 45 minutes 41.6527 seconds S; geodetic longitude: 48 degrees 06 minutes 04.0639 seconds W (of Greenwich). (Astronomic coordinates: Latitude 19 degrees 45 minutes 41.34 seconds S +/- 0.05 seconds , longitude 48 degrees 06 minutes 07.80 seconds W +/- 0.08 seconds ).",
		);

	public function __construct()
	{
		parent::__construct(new GRS1967Modified);
	}

}