<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class ST71Belep extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "ST71 Belep",
			'CRS' => 4643,
			'TranslationVectors' => array(
				'x' => 480.26,
				'y' => 438.32,
				'z' => 643.429,
			),
			'RotationalVectors' => array(
				'x' => 16.3119,
				'y' => 20.1721,
				'z' => -4.0349,
			),
			'Scale' => 111.7002,
			'Area' => "New Caledonia - Belep",
			'Remarks' => "",
			'Source' => "Bureau Geodesie et Nivellement, Service Topographique, via IGN Paris.",
			'Scope' => "Accuracy better than +/- 1 metre.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}