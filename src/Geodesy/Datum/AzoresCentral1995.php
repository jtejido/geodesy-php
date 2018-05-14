<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class AzoresCentral1995 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Azores Central Islands 1995",
			'CRS' => 4665,
			'TranslationVectors' => array(
				'x' => 106.301,
				'y' => -166.27,
				'z' => 37.916,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Portugal - Azores C - onshore",
			'Remarks' => "",
			'Source' => "Centre for Geodesy and Cartography, Portuguese Geographical Institute; http:/www.igeo.pt",
			'Scope' => "For low resolution applications.",
			'Origin' => "Fundamental point: Graciosa south west base. Origin and orientation constrained to those of the 1948 adjustment.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}