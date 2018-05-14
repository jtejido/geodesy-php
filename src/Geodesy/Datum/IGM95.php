<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class IGM95 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Istituto Geografico Militaire 1995",
			'CRS' => 4670,
			'TranslationVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Italy - including San Marino and Vatican",
			'Remarks' => "Parameter values taken from IGM95 to ETRS89 (1) (code 1098) assuming that ETRS89 is coincident with WGS 84 within the accuracy of the transformation.",
			'Source' => "ENI",
			'Scope' => "Approximation at the 1m level.",
			'Origin' => "Network of 1296 points observed 1992-1995 and adjusted in 1996 constrained to 9 ETRS89 points. Densification of ETRS89 in Italy.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}