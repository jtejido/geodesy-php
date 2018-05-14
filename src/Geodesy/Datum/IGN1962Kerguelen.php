<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class IGN1962Kerguelen extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "IGN 1962 Kerguelen",
			'CRS' => 4698,
			'TranslationVectors' => array(
				'x' => -145,
				'y' => 187,
				'z' => -103,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "French Southern Territories - Kerguelen onshore",
			'Remarks' => "Also published in US NIMA/NGA TR8350.2 which gives accuracy of +/-25m in each axis and states that derived at one station.",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "K0 1949.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}