<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class RGM04 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reseau Geodesique de Mayotte 2004",
			'CRS' => 4470,
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
			'Area' => "Mayotte",
			'Remarks' => "Approximation at the +/- 1m level assuming that RGM04 is equivalent to WGS 84.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "ITRF2000 at epoch 2004.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}