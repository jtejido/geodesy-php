<?php

namespace Geodesy\Datum;

use Geodesy\Models\AustralianNationalSpheroid;

class AGD84 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Australian Geodetic Datum 1984",
			'CRS' => 4203,
			'TranslationVectors' => array(
				'x' => 134,
				'y' => 48,
				'z' => -149,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Australia - AGD84",
			'Remarks' => "Derived at 90 stations. Note: AGD84 officially adopted only in Queensland, South Australia and Western Australia.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy 2m in each axis.",
			'Origin' => "Fundamental point: Johnson Memorial Cairn. Latitude: 25 degrees 56 minutes 54.5515 seconds S, longitude: 133 degrees 12 minutes 30.0771 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new AustralianNationalSpheroid);
	}

}