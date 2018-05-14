<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class Ocotepeque1935 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Ocotepeque 1935",
			'CRS' => 5451,
			'TranslationVectors' => array(
				'x' => -213.116,
				'y' => -9.358,
				'z' => 74.946,
			),
			'RotationalVectors' => array(
				'x' => 0.0000114,
				'y' => -0.000000298,
				'z' => 0.000031,
			),
			'Scale' => -5.22,
			'Area' => "Central America - Guatemala to Costa Rica",
			'Remarks' => "Rotations in original source given in radians are equivalent to Rx = 2.35', Ry = -0.06', Rz = 6.39'.",
			'Source' => "'Estudio comparativo del Datum Geod?sico de Ocotepeque y el Datum Satelitario WGS84', School of Topography, Cadastre & Geodesy at the National University (UNA); reported in IGN Report on CR05. See Information source for Costa Rica 2005 (Datum Code 1065).",
			'Scope' => "Topographic mapping.",
			'Origin' => "Fundamental point: Base Norte. Latitude: 14 degrees 26 minutes 20.168 seconds N, longitude: 89 degrees 11 minutes 33.964 seconds W.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1866);
	}

}