<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class SIRGASChile extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "SIRGAS-Chile",
			'CRS' => 5360,
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
			'Area' => "Chile",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "ITRF2000 at epoch 2002.0.  Densification of SIRGAS 2000 network in Chile, consisting of 650 monumented stations.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}