<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class SHGD2015 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "St. Helena Geodetic Datum 2015",
			'CRS' => 7886,
			'TranslationVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "St Helena - St Helena Island",
			'Remarks' => "SHGD2015 is realized by ITRF2008 at epoch 2015.0 and can be considered coincident with WGS 84 at epoch 2015.0 Accuracy 3 cm at 1/1/2015 then degrades by 3 cm/yr from 1/1/2015 depending upon epoch of WGS 84 due to motion of the Nubian Plate",
			'Source' => "St. Helena Government, Environment and Natural Resources Directorate (ENRD).",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "ITRF2008 at epoch 2015.0. ITRF2008 coordinates (15 degrees 56 minutes 33.1198 seconds S, 5 degrees 40 minutes 02.4412 seconds W, 453.183m ellipsoid height) of Longwood IGS CORS station STHL on 1st January 2015.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}