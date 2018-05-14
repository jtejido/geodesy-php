<?php

namespace Geodesy\Datum;

use Geodesy\Models\Helmert1906;

class Egypt1907 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Egypt 1907",
			'CRS' => 4229,
			'TranslationVectors' => array(
				'x' => 127.535,
				'y' => -113.495,
				'z' => 12.7,
			),
			'RotationalVectors' => array(
				'x' => 1.603747,
				'y' => -0.153612,
				'z' => -5.364408,
			),
			'Scale' => -5.33745,
			'Area' => "Egypt",
			'Remarks' => "Derived at 30 stations throughout Egypt 1907 network. Accuracy determined at 15 stations 0.7m in each axis.",
			'Source' => "Survey Research Institute Egypt in Proceedings of the ASPRS 2006 Annual Conference.",
			'Scope' => "Unified transformation for whole country. Accuracy under 1m in X, Y and Z axes.",
			'Origin' => "Fundamental point: Station F1 (Venus). Latitude: 30 degrees 01 minutes 42.86 seconds N, longitude: 31 degrees 16 minutes 33.60 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Helmert1906);
	}

}