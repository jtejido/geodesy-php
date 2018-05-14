<?php

namespace Geodesy\Datum;

use Geodesy\Models\Everest18301962Definition;

class Kalianpur1962 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Kalianpur 1962",
			'CRS' => 4145,
			'TranslationVectors' => array(
				'x' => -283,
				'y' => -682,
				'z' => -231,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Pakistan",
			'Remarks' => "Care! DMA ellipsoid is inconsistent with EPSG ellipsoid - transformation parameter values may not be appropriate. No accuracy estimate available.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes.",
			'Origin' => "Fundamental point: Kalianpur. Latitude: 24 degrees  07 minutes 11.260 seconds N, longitude: 77 degrees 39 minutes 17.570 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Everest18301962Definition);
	}

}