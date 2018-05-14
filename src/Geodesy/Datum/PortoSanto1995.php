<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class PortoSanto1995 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Porto Santo 1995",
			'CRS' => 4663,
			'TranslationVectors' => array(
				'x' => 502.862,
				'y' => 247.438,
				'z' => -312.724,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Portugal - Madeira archipelago onshore",
			'Remarks' => "Derived at Forte de Sao Tiago.",
			'Source' => "Centre for Geodesy and Cartography, Portuguese Geographical Institute; http:/www.igeo.pt",
			'Scope' => "For low resolution applications.",
			'Origin' => "SE Base on Porto Santo island. Origin and orientation constrained to those of the 1936 adjustment.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}