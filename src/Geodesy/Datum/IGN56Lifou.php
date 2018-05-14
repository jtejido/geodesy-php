<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class IGN56Lifou extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "IGN56 Lifou",
			'CRS' => 4633,
			'TranslationVectors' => array(
				'x' => -336,
				'y' => -223,
				'z' => 231,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "New Caledonia - Lifou",
			'Remarks' => "Withdrawn by information source and replaced by improved information from local authority - see tfm code 15902.",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "South end of the Goume base.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}