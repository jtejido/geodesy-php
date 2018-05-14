<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class PampadelCastillo extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Pampa del Castillo",
			'CRS' => 4161,
			'TranslationVectors' => array(
				'x' => -27.5,
				'y' => -14,
				'z' => -186.4,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Argentina - Comodoro Rivadavia",
			'Remarks' => "Transformation parameter precision given to millimetres in information source but due to accuracy rounded to nearest decimetre for EPSG database.",
			'Source' => "Clifford J.Mugnier in Photogrammetric Engineering and Remote Sensing, December 1999. www.asprs.org/",
			'Scope' => "Geodetic surveying within the oil industry. Accuracy 25 m.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}