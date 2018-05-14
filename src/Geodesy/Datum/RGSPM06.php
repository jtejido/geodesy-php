<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class RGSPM06 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reseau Geodesique de Saint Pierre et Miquelon 2006",
			'CRS' => 4463,
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
			'Area' => "St Pierre and Miquelon",
			'Remarks' => "Approximation at the +/- 1m level assuming that RGSPM06 is equivalent to WGS 84.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "ITRF2000 at epoch 2006.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}