<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Gan1970 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Gan 1970",
			'CRS' => 4684,
			'TranslationVectors' => array(
				'x' => 133,
				'y' => 321,
				'z' => -50,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Maldives - onshore",
			'Remarks' => "Derived at 1 station.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}