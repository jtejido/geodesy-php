<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Ammassalik1958 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Ammassalik 1958",
			'CRS' => 4196,
			'TranslationVectors' => array(
				'x' => 45,
				'y' => -417,
				'z' => 3.5,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0.814,
			),
			'Scale' => 0.6,
			'Area' => "Greenland - Ammassalik area",
			'Remarks' => "",
			'Source' => "Kort og Matrikelstyrelsen, Copenhagen.",
			'Scope' => "Topographic mapping.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}