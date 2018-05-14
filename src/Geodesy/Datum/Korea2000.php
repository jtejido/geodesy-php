<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class Korea2000 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Geocentric datum of Korea",
			'CRS' => 4737,
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
			'Area' => "Korea, Republic of (South Korea)",
			'Remarks' => "Approximation at the +/- 1m level assuming that ITRF2000 is equivalent to WGS 84.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "ITRF2000 at epoch 2002.0.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}