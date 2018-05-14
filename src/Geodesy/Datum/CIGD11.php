<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class CIGD11 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Cayman Islands Geodetic Datum 2011",
			'CRS' => 6135,
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
			'Area' => "Cayman Islands",
			'Remarks' => "Approximation at the +/- 1m level assuming that CIGD11 is equivalent to WGS 84.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1m.",
			'Origin' => "ITRF2005 at epoch 2011.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}