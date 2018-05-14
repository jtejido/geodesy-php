<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class ISN93 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Islands Net 1993",
			'CRS' => 4659,
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
			'Area' => "Iceland",
			'Remarks' => "For many purposes ISN93 can be considered to be coincident with WGS 84.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level assuming that ISN93 is equivalent to WGS 84.",
			'Origin' => "ITRF93 at epoch 1993.6.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}