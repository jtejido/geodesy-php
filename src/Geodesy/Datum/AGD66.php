<?php

namespace Geodesy\Datum;

use Geodesy\Models\AustralianNationalSpheroid;

class AGD66 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Australian Geodetic Datum 1966",
			'CRS' => 4202,
			'TranslationVectors' => array(
				'x' => 133,
				'y' => 48,
				'z' => -148,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Australasia - Australia and PNG - AGD66",
			'Remarks' => "Derived at 105 stations. Replaced by AGD66 to WGS 84 (20) (code 6905).",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy 3m in each axis.",
			'Origin' => "Fundamental point: Johnson Memorial Cairn. Latitude: 25 degrees 56 minutes 54.5515 seconds S, longitude: 133 degrees 12 minutes 30.0771 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new AustralianNationalSpheroid);
	}

}