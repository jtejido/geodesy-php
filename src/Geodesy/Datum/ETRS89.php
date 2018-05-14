<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class ETRS89 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "European Terrestrial Reference System 1989",
			'CRS' => 4258,
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
			'Area' => "Europe - ETRS89",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "ETRS89 and WGS 84 are realizations of ITRS coincident to within 1 metre. This transformation has an accuracy equal to the coincidence figure.",
			'Origin' => "Fixed to the stable part of the Eurasian continental plate and consistent with ITRS at the epoch 1989.0.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}