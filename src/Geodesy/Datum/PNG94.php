<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class PNG94 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Papua New Guinea Geodetic Datum 1994",
			'CRS' => 5546,
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
			'Area' => "Papua New Guinea",
			'Remarks' => "Exact in 1994 but due to significant and variable tectonic activity in PNG, in 2011 PNG94 and WGS 84 differ generally by 2m but in areas of significant tectonic activity differences can exceed 9m.",
			'Source' => "OGP",
			'Scope' => "Approximation at the 2-10m level.",
			'Origin' => "ITRF92 at epoch 1994.0.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}