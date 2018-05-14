<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Nahrwan1967 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Nahrwan 1967",
			'CRS' => 4270,
			'TranslationVectors' => array(
				'x' => 247,
				'y' => 148,
				'z' => -369,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Asia - Middle East - Qatar offshore and UAE",
			'Remarks' => "Derived at 2 stations.  Note: Nahrwan 1967 is not used in Oman.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Nahrwan south base.  Latitude: 33 degrees 19 minutes 10.87 seconds N, longitude: 44 degrees 43 minutes 25.54 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}