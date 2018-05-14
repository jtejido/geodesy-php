<?php

namespace Geodesy\Datum;

use Geodesy\Models\Krassowsky1940;

class Pulkovo1995 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Pulkovo 1995",
			'CRS' => 4200,
			'TranslationVectors' => array(
				'x' => -24.82,
				'y' => 131.21,
				'z' => 82.66,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => -0.16,
			),
			'Scale' => 0.12,
			'Area' => "Russia",
			'Remarks' => "Derived through concatenation of Pulkovo 1995 to PZ-90 (1) (tfm code 1257) and PZ-90 to WGS 84 (2) (tfm code 1244). Mandated for use in Russia by GOST R 51794-2001, but this has been superseded by GOST R 51794-2008. Replaced by tfm code 5043.",
			'Source' => "GOST R 51794-2001, approved by GosStandard of Russia Decree #327 of August 9, 2001.",
			'Scope' => "Accuracy 1 metre.",
			'Origin' => "Fundamental point: Pulkovo observatory. Latitude: 59 degrees 46 minutes 15.359 seconds N, longitude: 30 degrees 19 minutes 28.318 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Krassowsky1940);
	}

}