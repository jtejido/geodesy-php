<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class ISN2004 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Islands Net 2004",
			'CRS' => 5324,
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
			'Remarks' => "For many purposes ISN2004 can be considered to be coincident with WGS 84.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level assuming that ISN2004 is equivalent to WGS 84.",
			'Origin' => "ITRF2000 at epoch 2004.6.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}