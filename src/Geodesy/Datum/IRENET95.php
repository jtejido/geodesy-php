<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class IRENET95 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "IRENET95",
			'CRS' => 4173,
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
			'Area' => "Europe - Ireland (Republic and Ulster) - onshore",
			'Remarks' => "Assumes that ETRS89 is equivalent to WGS 84 within the accuracy of the transformation. IRENET95 is a regional realisation of ETRS89.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level.",
			'Origin' => "ETRS89 stations in Ireland",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}