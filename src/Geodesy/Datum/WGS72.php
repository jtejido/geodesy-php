<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS72 as WGS72Model;

class WGS72 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "World Geodetic System 1972",
			'CRS' => 4322,
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
			'Area' => "World",
			'Remarks' => "",
			'Source' => "U.S. National Imagery and Mapping Agency TR8350.2 revision of October 1997; http://earth-info.nga.mil/GandG/tr8350/tr8350_2.html",
			'Scope' => "For scientific purposes.",
			'Origin' => "Developed from a worldwide distribution of terrestrial and geodetic satellite observations and defined through a set of station coordinates.",
		);

	public function __construct()
	{
		parent::__construct(new WGS72Model);
	}

}