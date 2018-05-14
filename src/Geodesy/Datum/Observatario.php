<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class Observatario extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Observatario",
			'CRS' => 4129,
			'TranslationVectors' => array(
				'x' => 132,
				'y' => 110,
				'z' => 335,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Mozambique - south",
			'Remarks' => "Derived at 3 stations.",
			'Source' => "US NGA GeoTrans software v3.4 and NGA Standard 0036 v1.0.0 of 2014-07-08.",
			'Scope' => "For military purposes. Accuracy 10m in each axis.",
			'Origin' => "Fundamental point: Campos Rodrigues observatory, Maputo.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}