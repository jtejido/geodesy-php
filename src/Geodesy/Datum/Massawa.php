<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class Massawa extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Massawa",
			'CRS' => 4262,
			'TranslationVectors' => array(
				'x' => -639,
				'y' => -405,
				'z' => -60,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Eritrea",
			'Remarks' => "Derived at 1 station.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}