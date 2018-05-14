<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class Dabola1981 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Dabola 1981",
			'CRS' => 4155,
			'TranslationVectors' => array(
				'x' => 83,
				'y' => -37,
				'z' => -124,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Guinea - onshore",
			'Remarks' => "",
			'Source' => "NIMA TR8350.2 2nd edition via IGN Paris",
			'Scope' => "Accuracy 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880IGN);
	}

}