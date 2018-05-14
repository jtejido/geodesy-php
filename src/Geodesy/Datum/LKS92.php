<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class LKS92 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Latvia 1992",
			'CRS' => 4661,
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
			'Area' => "Latvia",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "LKS92 is a national realization of ETRS89 and coincident to WGS84 within 1 metre. This transformation has an accuracy equal to the coincidence figure.",
			'Origin' => "Constrained to 4 ETRS89 points in Latvia from the EUREF Baltic 1992 campaign.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}