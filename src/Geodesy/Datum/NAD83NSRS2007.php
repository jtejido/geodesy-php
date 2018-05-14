<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class NAD83NSRS2007 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "NAD83 (National Spatial Reference System 2007)",
			'CRS' => 4759,
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
			'Area' => "USA - CONUS and Alaska; PRVI",
			'Remarks' => "Approximation at the +/- 1m level assuming that NAD83(NSRS2007) is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "For applications to an accuracy of 1 metre.",
			'Origin' => "Coordinates of 486 national continually operating reference system (CORS) and 195 collaborative GPS (CGPS) sites constrained to their CORS96 values, ITRF2000 at epoch 2002.0.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}