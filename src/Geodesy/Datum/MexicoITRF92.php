<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class MexicoITRF92 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Mexico ITRF92",
			'CRS' => 4483,
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
			'Area' => "Mexico",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "ITRF1992 at epoch 1988.00.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}