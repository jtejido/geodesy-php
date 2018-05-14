<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class AzoresOriental1940 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Azores Oriental Islands 1940",
			'CRS' => 4184,
			'TranslationVectors' => array(
				'x' => 203,
				'y' => -141,
				'z' => -53,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Portugal - Azores E - onshore",
			'Remarks' => "Derived at 2 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 rev 3, January 2000. http://earth-info.nga.mil/GandG/",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Forte de S degrees o Bras.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}