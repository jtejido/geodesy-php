<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class MOP78 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "MOP78",
			'CRS' => 4639,
			'TranslationVectors' => array(
				'x' => -253,
				'y' => 132,
				'z' => 127,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Wallis and Futuna - Wallis",
			'Remarks' => "Replaces information from 2001 (tfm code 1925).",
			'Source' => "IGN Paris (2005).",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}