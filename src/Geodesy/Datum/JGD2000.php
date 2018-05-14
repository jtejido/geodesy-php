<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class JGD2000 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Japanese Geodetic Datum 2000",
			'CRS' => 4612,
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
			'Area' => "Japan",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level.",
			'Origin' => "ITRF94 at epoch 1997.0. Fundamental point: Tokyo-Taisho, latitude: 35 degrees 39 minutes 29.1572 seconds N, longitude: 139 degrees 44 minutes 28.8759 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}