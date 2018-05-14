<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class Katanga1955 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Katanga 1955",
			'CRS' => 4695,
			'TranslationVectors' => array(
				'x' => 103.746,
				'y' => 9.614,
				'z' => 255.95,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Congo DR (Zaire) - Katanga",
			'Remarks' => "Parameter values taken from Katanga 1955 to RGRDC 2005 (1) (code 4065) assuming that RGRDC 2005 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Accuracy 1.5m.",
			'Origin' => "Fundamental point: Tshinsenda A. Latitude: 12 degrees 30 minutes 31.568 seconds S, longitude: 28 degrees 01 minutes 02.971 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}