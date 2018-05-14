<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class NAD27CGQ77 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "North American Datum 1927 (CGQ77)",
			'CRS' => 4609,
			'TranslationVectors' => array(
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Canada - Quebec",
			'Remarks' => "Parameter file is from NAD27(CGQ77) to NAD83(CSRS) (1) (code 1845) assuming that NAD83(CSRS98) is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level.",
			'Origin' => "Fundamental point: Meade minutes s Ranch. Latitude: 39 degrees 13 minutes 26.686 seconds N, longitude: 98 degrees 32 minutes 30.506 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}