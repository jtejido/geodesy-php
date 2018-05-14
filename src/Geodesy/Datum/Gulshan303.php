<?php

namespace Geodesy\Datum;

use Geodesy\Models\Everest18301937Adjustment;

class Gulshan303 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Gulshan 303",
			'CRS' => 4682,
			'TranslationVectors' => array(
				'x' => -283.7,
				'y' => -735.9,
				'z' => -261.1,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Bangladesh",
			'Remarks' => "Derived at origin station in Dhaka. Source information given to 3 decimal places but rounded by OGP to be commensurate with stated accuracy.",
			'Source' => "Survey of Bangladesh via IGN Paris and Tullow Oil.",
			'Scope' => "Oil exploration.",
			'Origin' => "Gulshan garden, Dhaka.",
		);

	public function __construct()
	{
		parent::__construct(new Everest18301937Adjustment);
	}

}