<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Scoresbysund1952 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Scoresbysund 1952",
			'CRS' => 4195,
			'TranslationVectors' => array(
				'x' => -105,
				'y' => -326,
				'z' => 102.5,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0.814,
			),
			'Scale' => 0.6,
			'Area' => "Greenland - Scoresbysund area",
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