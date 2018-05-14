<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class FEH2010 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Fehmarnbelt Datum 2010",
			'CRS' => 5593,
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
			'Area' => "Europe - Fehmarnbelt outer",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Approximation at the 1m level.",
			'Origin' => "ITRF2005 at epoch 2010.14.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}