<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class RGF93 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reseau Geodesique Francais 1993",
			'CRS' => 4171,
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
			'Area' => "France",
			'Remarks' => "Parameter values from RGF93 to ETRS89 (1) (code 1591) assuming that ETRS89 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level.",
			'Origin' => "Coincident with ETRS89 at epoch 1993.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}