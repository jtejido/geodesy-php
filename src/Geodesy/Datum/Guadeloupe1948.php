<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Guadeloupe1948 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Guadeloupe 1948",
			'CRS' => 4622,
			'TranslationVectors' => array(
				'x' => 467,
				'y' => 16,
				'z' => 300,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Guadeloupe - Grande-Terre and surrounding islands - onshore",
			'Remarks' => "",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}