<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class SapperHill1943 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Sapper Hill 1943",
			'CRS' => 4292,
			'TranslationVectors' => array(
				'x' => 355,
				'y' => -21,
				'z' => -72,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Falkland Islands - onshore",
			'Remarks' => "Derived at 5 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes. Accuracy 1m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}