<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class Peru96 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Peru96",
			'CRS' => 5373,
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
			'Area' => "Peru",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "Densification of SIRGAS95 network in Peru, consisting of 47 passive geodetic stations and 3 continuous recording GPS stations. Documented as ITRF94 at epoch 1995.4 but possibly a rounded value as SIRGAS95 is at epoch 1995.42.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}