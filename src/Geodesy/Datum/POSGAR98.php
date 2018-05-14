<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class POSGAR98 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Posiciones Geodesicas Argentinas 1998",
			'CRS' => 4190,
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
			'Area' => "Argentina",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level.",
			'Origin' => "A geodetic network of 136 high accuracy surveyed points. Densification of SIRGAS 1995; ITRF94 at epoch 1995.42.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}