<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class HongKongGeodeticCS extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Hong Kong Geodetic",
			'CRS' => 8427,
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
			'Area' => "China - Hong Kong",
			'Remarks' => "Approximation at the +/- 1m level assuming that Hong Kong Geodetic CS is equivalent to WGS 84.",
			'Source' => "IOGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "ITRF96 at epoch 1998.33",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}