<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class Macao2008 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Macao Geodetic Datum 2008",
			'CRS' => 8431,
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
			'Area' => "China - Macao",
			'Remarks' => "Approximation at the +/- 1m level assuming that Macao 2008 is equivalent to WGS 84.",
			'Source' => "IOGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "ITRF2005 at epoch 2008.38.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}