<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class RGR92 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reseau Geodesique de la Reunion 1992",
			'CRS' => 4627,
			'TranslationVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Reunion",
			'Remarks' => "",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "ITRF91 at epoch 1993.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}