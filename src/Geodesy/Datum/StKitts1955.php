<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class StKitts1955 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "St. Kitts 1955",
			'CRS' => 4605,
			'TranslationVectors' => array(
				'x' => 7,
				'y' => -215,
				'z' => -225,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "St Kitts and Nevis - onshore",
			'Remarks' => "Derived at 2 stations.",
			'Source' => "U.S. National Imagery and Mapping Agency TR8350.2 revision of October 1997; http://earth-info.nga.mil/GandG/",
			'Scope' => "For military purposes. Accuracy 25m in each of X, Y and Z axes.",
			'Origin' => "Fundamental point: station K12.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}