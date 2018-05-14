<?php

namespace Geodesy\Datum;

use Geodesy\Models\BesselModified;

class NGO1948 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "NGO 1948",
			'CRS' => 4273,
			'TranslationVectors' => array(
				'x' => -278.3,
				'y' => -93,
				'z' => -474.5,
			),
			'RotationalVectors' => array(
				'x' => 7.889,
				'y' => 0.05,
				'z' => -6.61,
			),
			'Scale' => -6.21,
			'Area' => "Norway - onshore",
			'Remarks' => "Parameter values from NGO 1948 to ETRS89 (1) (code 1653). Assumes ETRS89 and WGS 84 can be considered the same to within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "For applications to an accuracy of 3 metres.",
			'Origin' => "Fundamental point: Oslo observatory. Latitude: 59 degrees 54 minutes 43.7 seconds N, longitude: 10 degrees 43 minutes 22.5 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new BesselModified);
	}

}