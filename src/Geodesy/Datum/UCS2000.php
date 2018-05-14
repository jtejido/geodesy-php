<?php

namespace Geodesy\Datum;

use Geodesy\Models\Krassowsky1940;

class UCS2000 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Ukraine 2000",
			'CRS' => 5561,
			'TranslationVectors' => array(
				'x' => -24,
				'y' => 121,
				'z' => 76,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Ukraine",
			'Remarks' => "Rounded parameter values taken from UCS-2000 to ITRF2000 (1) (code 7817) assuming that WGS 84 is equivalent to ITRS2000 within the accuracy of the transformation. Replaces UCS-2000 to WGS 84 (1) (tfm code 5590).",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level assuming that WGS 84 is equivalent to ITRS2000.",
			'Origin' => "Orientation and scale constrained to be same as ITRF2000 at epoch 2005.0. Position is minimised deviation between reference ellipsoid and quasigeoid in territory of Ukraine.",
		);

	public function __construct()
	{
		parent::__construct(new Krassowsky1940);
	}

}