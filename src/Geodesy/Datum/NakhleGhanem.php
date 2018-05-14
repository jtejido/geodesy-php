<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class NakhleGhanem extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Nakhl-e Ghanem",
			'CRS' => 4693,
			'TranslationVectors' => array(
				'x' => 0,
				'y' => 0.15,
				'z' => -0.68,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Iran - Kangan district",
			'Remarks' => "Derived in Tombak district in March 2005. Used for South Pars phase 11 and Pars LNG plants.",
			'Source' => "Total",
			'Scope' => "Petroleum Exploration and Production.",
			'Origin' => "Coordinates of two stations determined with respect to ITRF 2000 at epoch 2005.2: BMT1 latitude 27 degrees 42 minutes 09.8417 seconds N, longitude 52 degrees 12 minutes 11.0362 seconds E (of Greenwich); Total1 latitude 27 degrees 31 minutes 03.8896 seconds N, longitude 52 degrees 36 minutes 13.1312 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}