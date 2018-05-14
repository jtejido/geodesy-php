<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class Mauritania1999 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Mauritania 1999",
			'CRS' => 4702,
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
			'Area' => "Mauritania",
			'Remarks' => "Mauritania 1999 can be considered to be the same as WGS 84 within the accuracy of this transformation.",
			'Source' => "OGP",
			'Scope' => "Minerals management. Accuracy 1m.",
			'Origin' => "ITRF96 at epoch 1997.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}