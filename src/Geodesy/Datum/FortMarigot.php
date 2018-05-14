<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class FortMarigot extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Fort Marigot",
			'CRS' => 4621,
			'TranslationVectors' => array(
				'x' => -137,
				'y' => -248,
				'z' => 430,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Guadeloupe - St Martin and St Barthelemy - onshore",
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