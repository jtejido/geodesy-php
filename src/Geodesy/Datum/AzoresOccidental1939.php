<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class AzoresOccidental1939 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Azores Occidental Islands 1939",
			'CRS' => 4182,
			'TranslationVectors' => array(
				'x' => 425,
				'y' => 169,
				'z' => -81,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Portugal - Azores W - onshore",
			'Remarks' => "Derived at 3 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 rev 3, January 2000. http://earth-info.nga.mil/GandG/",
			'Scope' => "For military purposes only. Accuracy 20m in each axis.",
			'Origin' => "Fundamental point: Observatario Meteorologico Flores.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}