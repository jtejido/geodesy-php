<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Luxembourg1930 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Luxembourg 1930",
			'CRS' => 4181,
			'TranslationVectors' => array(
				'x' => 265.983,
				'y' => -76.918,
				'z' => -20.182,
			),
			'RotationalVectors' => array(
				'x' => 0.4099,
				'y' => 2.9332,
				'z' => -2.6881,
			),
			'Scale' => -0.43,
			'Area' => "Luxembourg",
			'Remarks' => "Parameter values from Luxembourg 1930 to ETRS89 (2) (code 1078). Assumes ETRS89 and WGS 84 can be considered the same to within the accuracy of the transformation.",
			'Source' => "Administration du Cadastre et de la Topographie. http://www.etat.lu/ACT",
			'Scope' => "For applications to an accuracy of 0.5 metre.",
			'Origin' => "Fundamental point: northern station of Habay-la-Neuve baseline in Belgium. Latitude: 49 degrees 43 minutes 24.408 seconds N, longitude: 5 degrees 38 minutes 22.470 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}