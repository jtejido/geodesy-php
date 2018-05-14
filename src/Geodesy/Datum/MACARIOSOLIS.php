<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class MACARIOSOLIS extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Sistema Geodesico Nacional de Panama MACARIO SOLIS",
			'CRS' => 5371,
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
			'Area' => "Panama",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "ITRF2000 at epoch 2000.0. Densification of SIRGAS 2000 network in Panama, consisting of 20 GPS stations throughout the country.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}