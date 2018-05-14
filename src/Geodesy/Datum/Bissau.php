<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Bissau extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Bissau",
			'CRS' => 4165,
			'TranslationVectors' => array(
				'x' => 173,
				'y' => -253,
				'z' => -27,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Guinea-Bissau - onshore",
			'Remarks' => "Derived at 2 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 second edition September 1991",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}