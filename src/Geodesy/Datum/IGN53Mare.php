<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class IGN53Mare extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "IGN53 Mare",
			'CRS' => 4641,
			'TranslationVectors' => array(
				'x' => 408.809,
				'y' => -366.856,
				'z' => 412.987,
			),
			'RotationalVectors' => array(
				'x' => 1.8842,
				'y' => -0.5308,
				'z' => 2.1655,
			),
			'Scale' => 121.0993,
			'Area' => "New Caledonia - Mare",
			'Remarks' => "Withdrawn by information source and replaced by improved information - see tfm code 15901.",
			'Source' => "Bureau Geodesie et Nivellement, Service Topographique, via IGN Paris.",
			'Scope' => "Accuracy better than +/- 1 metre.",
			'Origin' => "South-east end of the La Roche base.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}