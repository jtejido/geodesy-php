<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class JAD69 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Jamaica 1969",
			'CRS' => 4242,
			'TranslationVectors' => array(
				'x' => 33.722,
				'y' => -153.789,
				'z' => -94.959,
			),
			'RotationalVectors' => array(
				'x' => 8.581,
				'y' => 4.478,
				'z' => -4.54,
			),
			'Scale' => -8.95,
			'Area' => "Jamaica - onshore",
			'Remarks' => "Derived at 4 stations, tested at a further 9. Also used as tfm to JAD69 to JAD2001 (see code 15926).?Note: Info source paper contains an error in sign of dS, subsequently confirmed by primary author and NLA of Jamaica, and corrected in this record.",
			'Source' => "'GPS Coordinate Transformation Parameters for Jamaica', Newsome and Harvey, Survey Review Volume 37 Number 289 (July 2003), but with an error in sign of dS confirmed by author and NLA.",
			'Scope' => "For applications requiring 1m accuracy.",
			'Origin' => "Fundamental point: Fort Charles Flagstaff. Latitude: 17 degrees 55 minutes 55.800 seconds N, longitude: 76 degrees 56 minutes 37.260 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}