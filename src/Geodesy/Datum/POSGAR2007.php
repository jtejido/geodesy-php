<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class POSGAR2007 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Posiciones Geodesicas Argentinas 2007",
			'CRS' => 5340,
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
			'Scope' => "Approximation at the sub meter level.",
			'Origin' => "A geodetic network of 211 high accuracy surveyed points (178 passive and 33 continuous operating) based on ITRF2005, Epoch 2006.6, that define the National Geodetic System (Sistema Geod degrees sico Nacional) effective 15 May 2009.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}