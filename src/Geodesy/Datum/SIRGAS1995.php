<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class SIRGAS1995 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Sistema de Referencia Geocentrico para America del Sur 1995",
			'CRS' => 4170,
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
			'Area' => "South America - SIRGAS 1995 by country",
			'Remarks' => "",
			'Source' => "NIMA TR8350.2 revision of January 2000.",
			'Scope' => "For military purposes. Accuracy 1m in each axis.",
			'Origin' => "ITRF94 at epoch 1995.42.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}