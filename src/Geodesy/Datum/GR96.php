<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class GR96 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Greenland 1996",
			'CRS' => 4747,
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
			'Area' => "Greenland",
			'Remarks' => "Approximation at the +/- 1m level assuming that GR96 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "For applications with an accuracy of +/- 1m.",
			'Origin' => "ITRF94 at epoch 1996.62",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}