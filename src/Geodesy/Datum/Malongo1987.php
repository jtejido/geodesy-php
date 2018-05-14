<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Malongo1987 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Malongo 1987",
			'CRS' => 4259,
			'TranslationVectors' => array(
				'x' => 252.95,
				'y' => 4.11,
				'z' => 96.38,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Africa - Angola (Cabinda) and DR Congo (Zaire) - offshore",
			'Remarks' => "Derived at Station Y in April 1989 using 572 transit satellite passes. Computed value for dZ was -96.42 but -96.38 has been utilised. Replaced Malongo 1987 to WGS 84 (3) (code 15791) in 1989. Replaced by Malongo 1987 to WGS 84 (2) (code 1557) in 1990.",
			'Source' => "Chevron.",
			'Scope' => "Offshore oil exploration and production between April 1989 and June 1990.",
			'Origin' => "Fundamental point: Station Y at Malongo base camp. Latitude: 5 degrees 23 minutes 30.810 seconds S, longitude: 12 degrees 12 minutes 01.590 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}