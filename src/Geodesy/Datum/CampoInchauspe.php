<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class CampoInchauspe extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Campo Inchauspe",
			'CRS' => 4221,
			'TranslationVectors' => array(
				'x' => 148,
				'y' => -136,
				'z' => -90,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Argentina - mainland onshore and offshore TdF",
			'Remarks' => "Derived at 20 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 September 1987.",
			'Scope' => "For military purposes. Accuracy 5m in each axis.",
			'Origin' => "Fundamental point: Campo Inchauspe. Latitude: 35 degrees 58 minutes 16.56 seconds S, longitude: 62 degrees 10 minutes 12.03 seconds W (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}