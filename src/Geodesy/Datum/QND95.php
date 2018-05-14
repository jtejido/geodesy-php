<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class QND95 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Qatar National Datum 1995",
			'CRS' => 4614,
			'TranslationVectors' => array(
				'x' => 119.4248,
				'y' => 303.65872,
				'z' => 11.00061,
			),
			'RotationalVectors' => array(
				'x' => 1.164298,
				'y' => 0.174458,
				'z' => 1.096259,
			),
			'Scale' => -3.657065,
			'Area' => "Qatar - onshore",
			'Remarks' => "Transformation defines QND95. May be approximated to 1m throughout Qatar by geocentric translation transformation with dX=-127.78098m, dY=-283.37477m, dZ=+21.24081m.",
			'Source' => "Qatar Centre for Geographic Information.",
			'Scope' => "Parameter values are defined and therefore exact.",
			'Origin' => "Defined by transformation from WGS 84 - see coordinate operation code 1840.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}