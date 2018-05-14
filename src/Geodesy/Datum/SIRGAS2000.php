<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class SIRGAS2000 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Sistema de Referencia Geocentrico para las AmericaS 2000",
			'CRS' => 4674,
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
			'Area' => "Latin America - SIRGAS 2000 by country",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "ITRF2000 at epoch 2000.40.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}