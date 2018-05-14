<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class TUREF extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Turkish National Reference Frame",
			'CRS' => 5252,
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
			'Area' => "Turkey",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level as both TUREF and WGS 84 are realizations of ITRS.",
			'Origin' => "ITRF96 at epoch 2005.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}