<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class BDA2000 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Bermuda 2000",
			'CRS' => 4762,
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
			'Area' => "Bermuda",
			'Remarks' => "Approximation at the +/- 1m level assuming that BDA2000 is equivalent to WGS 84.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "ITRF96 at epoch 2000.0.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}