<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class TWD97 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Taiwan Datum 1997",
			'CRS' => 3824,
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
			'Area' => "Taiwan",
			'Remarks' => "Approximation at the +/- 1m level assuming that TWD97 is equivalent to WGS 84.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1m.",
			'Origin' => "ITRF94 at epoch 1997.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}