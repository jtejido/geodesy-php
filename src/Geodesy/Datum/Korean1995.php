<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class Korean1995 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Korean Datum 1995",
			'CRS' => 4166,
			'TranslationVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Korea, Republic of (South Korea) - onshore",
			'Remarks' => "Derived at 5 stations.",
			'Source' => "U.S. National Imagery and Mapping Agency TR8350.2 revision of October 1997; http://earth-info.nga.mil/GandG/",
			'Scope' => "For military purposes. Accuracy 1m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}