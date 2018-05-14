<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class RSRGD2000 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Ross Sea Region Geodetic Datum 2000",
			'CRS' => 4764,
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
			'Area' => "Antarctica - Ross Sea Region",
			'Remarks' => "Approximation at the +/- 1m level assuming that RSRGD2000 is equivalent to WGS 84.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "Based on ITRF96 at epoch 2000.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}