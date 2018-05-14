<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class NZGD2000 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "New Zealand Geodetic Datum 2000",
			'CRS' => 4167,
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
			'Area' => "New Zealand",
			'Remarks' => "",
			'Source' => "Land Information New Zealand: LINZS25000 Standard for New Zealand Geodetic Datum 2000; 16 November 2007.",
			'Scope' => "Assumes NZGD2000 is coincident to WGS 84 to the 1m accuracy level.",
			'Origin' => "Based on ITRF96 at epoch 2000.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}