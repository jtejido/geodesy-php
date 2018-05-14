<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class MARGEN extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Marco Geodesico Nacional de Bolivia",
			'CRS' => 5354,
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
			'Area' => "Bolivia",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "IGS05 (ITRF2005) at epoch 2010.2.  Densification of SIRGAS95 network in Bolivia, consisting of 125 passive geodetic stations and 8 continuous recording GPS stations.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}