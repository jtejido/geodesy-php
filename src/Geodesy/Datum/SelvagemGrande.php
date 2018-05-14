<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class SelvagemGrande extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Selvagem Grande",
			'CRS' => 4616,
			'TranslationVectors' => array(
				'x' => 289,
				'y' => 124,
				'z' => -60,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Portugal - Selvagens onshore",
			'Remarks' => "Derived at 1 station.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 rev 3, January 2000. http://earth-info.nga.mil/GandG/",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}