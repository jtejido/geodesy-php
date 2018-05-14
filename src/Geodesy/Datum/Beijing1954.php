<?php

namespace Geodesy\Datum;

use Geodesy\Models\Krassowsky1940;

class Beijing1954 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Beijing 1954",
			'CRS' => 4214,
			'TranslationVectors' => array(
				'x' => -18,
				'y' => 136.8,
				'z' => 73.7,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0.814,
			),
			'Scale' => 0.38,
			'Area' => "China",
			'Remarks' => "Concatenated via WGS 72BE. Recomputation by Shelltech in 1981 of SSB 1980 observation.",
			'Source' => "Total",
			'Scope' => "Geophysical exploration in Bei Bu basin. Accuracy stated as 1m within basin.",
			'Origin' => "Pulkovo, transferred through Russian triangulation.",
		);

	public function __construct()
	{
		parent::__construct(new Krassowsky1940);
	}

}