<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class Slovenia1996 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Slovenia Geodetic Datum 1996",
			'CRS' => 4765,
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
			'Area' => "Slovenia",
			'Remarks' => "Approximation at the +/- 1m level assuming that ETRS89 is equivalent to WGS 84.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "Densification of ETRS89, based on ITRS89 at epoch 1995.55.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}