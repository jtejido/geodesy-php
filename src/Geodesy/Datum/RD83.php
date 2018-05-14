<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class RD83 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Rauenberg Datum/83",
			'CRS' => 4745,
			'TranslationVectors' => array(
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Germany - Saxony",
			'Remarks' => "These parameter values are taken from DHDN to ETRS89 (8) (code 15948) as RD/83 and ETRS89 may be considered equivalent to DHDN and WGS 84 respectively within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "For applications requiring an accuracy of better than 1 metre.",
			'Origin' => "Fundamental point: Rauenberg. Latitude: 52 degrees 27 minutes 12.021 seconds N, longitude: 13 degrees 22 minutes 04.928 seconds E (of Greenwich). This station was destroyed in 1910 and the station at Potsdam substituted as the fundamental point.",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}