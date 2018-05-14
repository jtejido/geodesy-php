<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Douala1948 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Douala 1948",
			'CRS' => 4192,
			'TranslationVectors' => array(
				'x' => 206.1,
				'y' => 174.7,
				'z' => 87.7,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Cameroon - coastal area",
			'Remarks' => "Derived at Manoca tower assuming the pyramid on the tower and the centre of the tower reservoir are co-located. This assumption carries a few metres uncertainty.",
			'Source' => "Total",
			'Scope' => "Oil exploration.",
			'Origin' => "South pillar of Douala base; 4 degrees 00 minutes 40.64 seconds N, 9 degrees 42 minutes 30.41 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}