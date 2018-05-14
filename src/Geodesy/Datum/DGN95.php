<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class DGN95 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Datum Geodesi Nasional 1995",
			'CRS' => 4755,
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
			'Area' => "Indonesia",
			'Remarks' => "Approximation at the +/- 1m level assuming that DGN95 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Accuracy 1 metre.",
			'Origin' => "ITRF91at epoch 1992.0.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}