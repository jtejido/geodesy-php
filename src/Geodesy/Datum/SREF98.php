<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class SREF98 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Serbian Reference Network 1998",
			'CRS' => 4075,
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
			'Area' => "Serbia",
			'Remarks' => "Approximation at the +/- 1m level assuming that ETRS89 is equivalent to WGS 84. SREF98 is a regional realisation of ETRS89.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "Densification of ETRS89 in Serbia at epoch 1998.7 based on coordinates of 6 stations in Serbia of Yugoslav Reference Frame (YUREF) 1998 campaign.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}