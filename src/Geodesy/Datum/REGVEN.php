<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class REGVEN extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Red Geodesica Venezolana",
			'CRS' => 4189,
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
			'Area' => "Venezuela",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level.",
			'Origin' => "Realised by a frame of 67 stations observed in 1995 as a densification of the SIRGAS campaign and adjusted in the ITRF94. Documented as ITRF94 at epoch 1995.4 but possibly a rounded value as SIRGAS95 is at epoch 1995.42.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}