<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class RGAF09 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reseau Geodesique des Antilles Francaises 2009",
			'CRS' => 5489,
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
			'Area' => "Caribbean - French Antilles",
			'Remarks' => "Approximation at the +/- 1m level assuming that RGAF09 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "ITRF2005 at epoch 2009.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}