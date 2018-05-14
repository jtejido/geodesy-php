<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class DHDN extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Deutsches Hauptdreiecksnetz",
			'CRS' => 4314,
			'TranslationVectors' => array(
				'x' => -582,
				'y' => -105,
				'z' => -414,
			),
			'RotationalVectors' => array(
				'x' => -1.04,
				'y' => -0.35,
				'z' => 3.08,
			),
			'Scale' => -8.3,
			'Area' => "Germany - West Germany all states",
			'Remarks' => "Parameter values from DHDN to ETRS89 (1) (code 1309) assuming that ETRS89 is equivalent to WGS 84 within the accuracy of the transformation. Replaced by DHDN to WGS 84 (2) (tfm code 1777).",
			'Source' => "OGP",
			'Scope' => "For applications with an accuracy at 5 m level.",
			'Origin' => "Fundamental point: Rauenberg. Latitude: 52 degrees 27 minutes 12.021 seconds N, longitude: 13 degrees 22 minutes 04.928 seconds E (of Greenwich).  This station was destroyed in 1910 and the station at Potsdam substituted as the fundamental point.",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}