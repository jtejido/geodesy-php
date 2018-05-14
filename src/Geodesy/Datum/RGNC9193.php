<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class RGNC9193 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reseau Geodesique de Nouvelle Caledonie 91-93",
			'CRS' => 4749,
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
			'Area' => "New Caledonia",
			'Remarks' => "",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "ITRF90 at epoch 1989.0.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}