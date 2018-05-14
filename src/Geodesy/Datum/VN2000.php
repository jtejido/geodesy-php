<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class VN2000 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Vietnam 2000",
			'CRS' => 4756,
			'TranslationVectors' => array(
				'x' => 191.90441429,
				'y' => 39.30318279,
				'z' => 111.45032835,
			),
			'RotationalVectors' => array(
				'x' => -0.00928836,
				'y' => 0.01975479,
				'z' => -0.00427372,
			),
			'Scale' => -0.252906278,
			'Area' => "Vietnam - onshore",
			'Remarks' => "",
			'Source' => "Department of Survey and Mapping",
			'Scope' => "Academic research not officially adopted.",
			'Origin' => "Point N00, located in the premises of the Land Administration Research Institute, Hoang Quoc Viet Street, Hanoi.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}