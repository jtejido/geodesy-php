<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class Lisbon1890 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Lisbon 1890",
			'CRS' => 4666,
			'TranslationVectors' => array(
				'x' => -508.088,
				'y' => 191.042,
				'z' => -565.223,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Portugal - mainland - onshore",
			'Remarks' => "May be taken as a transformation from Lisbon 1890 to ETRS89 - see tfm code 5039.",
			'Source' => "Centre for Geodesy and Cartography, Portuguese Geographical Institute; http:/www.igeo.pt",
			'Scope' => "For low resolution applications.",
			'Origin' => "Fundamental point: Castelo Sao Jorge, Lisbon. Latitude: 38 degrees 42 minutes 43.631 seconds N, longitude: 9 degrees 07 minutes 54.862 seconds W of Greenwich.",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}