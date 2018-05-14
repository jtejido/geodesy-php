<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Nouakchott1965 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Nouakchott 1965",
			'CRS' => 4680,
			'TranslationVectors' => array(
				'x' => -124.5,
				'y' => 63.5,
				'z' => 281,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Mauritania - central coast",
			'Remarks' => "Derived by IGN in 1992 at 7 stations within Nouakchott city.",
			'Source' => "IGN Paris.",
			'Scope' => "Oil exploration.",
			'Origin' => "Nouakchott astronomical point.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}