<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class Amersfoort extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Amersfoort",
			'CRS' => 4289,
			'TranslationVectors' => array(
				'x' => -593.16,
				'y' => -26.15,
				'z' => -478.54,
			),
			'RotationalVectors' => array(
				'x' => -6.3239,
				'y' => -0.5008,
				'z' => -5.5487,
			),
			'Scale' => -4.0775,
			'Area' => "Netherlands - onshore",
			'Remarks' => "Replaced by Amersfoort to WGS 84 (2) (code 1672).",
			'Source' => "Nederlandse Commissie voor Geodesie publication 30; 1993.",
			'Scope' => "?",
			'Origin' => "Fundamental point: Amersfoort. Latitude: 52 degrees 09 minutes 22.178 seconds N, longitude: 5 degrees 23 minutes 15.478 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Bessel1841);
	}

}