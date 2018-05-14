<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class AzoresCentral1948 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Azores Central Islands 1948",
			'CRS' => 4183,
			'TranslationVectors' => array(
				'x' => 104,
				'y' => -167,
				'z' => 38,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Portugal - Azores C - onshore",
			'Remarks' => "Derived at 5 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 rev 3, January 2000. http://earth-info.nga.mil/GandG/",
			'Scope' => "For military purposes only. Accuracy 3m in each axis.",
			'Origin' => "Fundamental point: Graciosa south west base. Latitude: 39 degrees 03 minutes 54.934 seconds N, longitude: 28 degrees 02 minutes 23.882 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}