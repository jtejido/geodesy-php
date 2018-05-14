<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class StHelenaTritan extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "St. Helena Tritan",
			'CRS' => 7881,
			'TranslationVectors' => array(
				'x' => 0.077,
				'y' => -0.079,
				'z' => -0.086,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "St Helena - St Helena Island",
			'Remarks' => "Parameter values from Tritan St. Helena to SHGD2015 (1) (tfm code 7897). Assumes Tritan St. Helena and SHGD2015 can be considered the same to within the accuracy of the transformation.",
			'Source' => "St. Helena Government, Environment and Natural Resources Directorate (ENRD).",
			'Scope' => "For applications requiring an accuracy of better than 1 metre.",
			'Origin' => "WGS 84 at epoch 2011.773. WGS 84 coordinates (15 degrees 56 minutes 33.1217 seconds S, 5 degrees 40 minutes 02.4436 seconds W, 453.288m ellipsoid height) of Longwood IGS CORS station STHL on 9th October 2011",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}