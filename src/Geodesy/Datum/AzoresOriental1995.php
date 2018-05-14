<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class AzoresOriental1995 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Azores Oriental Islands 1995",
			'CRS' => 4664,
			'TranslationVectors' => array(
				'x' => 204.633,
				'y' => -140.216,
				'z' => -55.199,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Portugal - Azores E - onshore",
			'Remarks' => "Calculated in 2001.",
			'Source' => "Centre for Geodesy and Cartography, Portuguese Geographical Institute; http:/www.igeo.pt",
			'Scope' => "For low resolution applications.",
			'Origin' => "Fundamental point: Forte de S degrees o Bras. Origin and orientation constrained to those of the 1940 adjustment.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}