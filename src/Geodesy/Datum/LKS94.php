<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class LKS94 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Lithuania 1994 (ETRS89)",
			'CRS' => 4669,
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
			'Area' => "Lithuania",
			'Remarks' => "",
			'Source' => "HNIT-BALTIC GeoInfoServisas.",
			'Scope' => "LKS94 is a realization of ETRS89 and coincident to WGS 84 within 1 metre. This transformation has an accuracy equal to the coincidence figure.",
			'Origin' => "Constrained to 4 ETRS89 points in Lithuania from the EUREF Baltic 1992 campaign.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}