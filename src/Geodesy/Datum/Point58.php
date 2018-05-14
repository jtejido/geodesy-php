<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Point58 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Point 58",
			'CRS' => 4620,
			'TranslationVectors' => array(
				'x' => 106,
				'y' => 129,
				'z' => -165,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Africa - 12th parallel N",
			'Remarks' => "Derived at one point in each of Burkina Faso and Niger.",
			'Source' => "NIMA TR8350.2",
			'Scope' => "For military purposes. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Point 58. Latitude: 12 degrees 52 minutes 44.045 seconds N, longitude: 3 degrees 58 minutes 37.040 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}