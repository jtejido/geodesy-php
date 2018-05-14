<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Montserrat1958 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Montserrat 1958",
			'CRS' => 4604,
			'TranslationVectors' => array(
				'x' => -174,
				'y' => -359,
				'z' => -365,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Montserrat - onshore",
			'Remarks' => "Derived at 1 satellite station.",
			'Source' => "NIMA TR8350.2 revision 2 via Ordnance Survey of Great Britain.",
			'Scope' => "Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: station M36.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}