<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class LePouce1934 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Le Pouce 1934",
			'CRS' => 4699,
			'TranslationVectors' => array(
				'x' => 770.1,
				'y' => -158.4,
				'z' => 498.2,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Mauritius - mainland",
			'Remarks' => "Derived at 17 stations in 1994 by University of East London. Residuals less than 2m.",
			'Source' => "Ministry of Housing and Lands.",
			'Scope' => "Accuracy 2m.",
			'Origin' => "Fundamental point: Le Pouce. Latitude: 20 degrees 11 minutes 42.25 seconds S, longitude: 57 degrees 31 minutes 18.58 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}