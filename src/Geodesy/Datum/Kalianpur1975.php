<?php

namespace Geodesy\Datum;

use Geodesy\Models\Everest18301975Definition;

class Kalianpur1975 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Kalianpur 1975",
			'CRS' => 4146,
			'TranslationVectors' => array(
				'x' => -295,
				'y' => -736,
				'z' => -257,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "India - mainland",
			'Remarks' => "Care! DMA ellipsoid is inconsistent with EPSG ellipsoid - transformation parameter values may not be appropriate. Also source CRS may not apply to Nepal. Derived at 7 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes. Accuracy 12m, 10m and 15m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Kalianpur. Latitude: 24 degrees  07 minutes 11.260 seconds N, longitude: 77 degrees 39 minutes 17.570 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Everest18301975Definition);
	}

}