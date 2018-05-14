<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class IGRS extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Iraqi Geospatial Reference System",
			'CRS' => 3889,
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
			'Area' => "Iraq",
			'Remarks' => "Approximation at the +/- 1m level assuming that IGRS is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "ITRF2000 at epoch 1997.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}