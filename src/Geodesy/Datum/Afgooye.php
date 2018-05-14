<?php

namespace Geodesy\Datum;

use Geodesy\Models\Krassowsky1940;

class Afgooye extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Afgooye",
			'CRS' => 4205,
			'TranslationVectors' => array(
				'x' => 43,
				'y' => 163,
				'z' => -45,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Somalia - onshore",
			'Remarks' => "Derived at 1 station.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Krassowsky1940);
	}

}