<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class SIRGASES20078 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "SIRGAS_ES2007.8",
			'CRS' => 5393,
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
			'Area' => "El Salvador",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "ITRF2005 at epoch 2007.85.  Densification of SIRGAS-CON network in El Salvador, consisting of 38 monumented stations.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}