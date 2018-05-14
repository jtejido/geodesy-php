<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class ONGD14 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Oman National Geodetic Datum 2014",
			'CRS' => 7373,
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
			'Area' => "Oman",
			'Remarks' => "Approximation at the +/- 1m level assuming that ONG14 is equivalent to WGS 84. See transformation code 7377 for authoritative values.",
			'Source' => "IOGP",
			'Scope' => "Geodesy.",
			'Origin' => "20 stations of the Oman primary network tied to ITRF2008 at epoch 2013.15.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}