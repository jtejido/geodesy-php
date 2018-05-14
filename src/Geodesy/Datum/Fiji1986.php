<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS72;

class Fiji1986 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Fiji Geodetic Datum 1986",
			'CRS' => 4720,
			'TranslationVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => -4.5,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0.554,
			),
			'Scale' => -0.2263,
			'Area' => "Fiji - onshore",
			'Remarks' => "Approximation at the +/- 2m level assuming that Fiji 1986 is equivalent to WGS 72. Parameter values taken from WGS 72 to WGS 84 (1) (tfm code 1237).",
			'Source' => "OGP",
			'Scope' => "tbc",
			'Origin' => "NWL 9D coordinates of 6 stations on Vitu Levu and Vanua Levu.",
		);

	public function __construct()
	{
		parent::__construct(new WGS72);
	}

}