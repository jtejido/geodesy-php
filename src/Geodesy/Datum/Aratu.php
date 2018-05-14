<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Aratu extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Aratu",
			'CRS' => 4208,
			'TranslationVectors' => array(
				'x' => 139.62,
				'y' => -290.53,
				'z' => 150.29,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Brazil - Aratu",
			'Remarks' => "Replaced by Aratu to WGS 84 (18) (tfm code 5061) which Petrobras now recommends for the area.",
			'Source' => "Petrobras.",
			'Scope' => "Oil exploration.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}