<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class SIRGASROU98 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "SIRGAS-ROU98",
			'CRS' => 5381,
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
			'Area' => "Uruguay",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "Densification of SIRGAS95 network in Uruguay, consisting of 17 passive geodetic stations and 3 continuous recording GPS stations. Documented as ITRF94 at epoch 1995.4 but possibly a rounded value as SIRGAS95 is at epoch 1995.42.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}