<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class IGN72GrandeTerre extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "IGN72 Grande Terre",
			'CRS' => 4662,
			'TranslationVectors' => array(
				'x' => 13,
				'y' => 348,
				'z' => -292,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "New Caledonia - Grande Terre",
			'Remarks' => "Withdrawn by information source and replaced by improved information from local authority - see tfm code 15903.",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 10 metres.",
			'Origin' => "North end of Gomen base.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}