<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class CHTRF95 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Swiss Terrestrial Reference Frame 1995",
			'CRS' => 4151,
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
			'Area' => "Europe - Liechtenstein and Switzerland",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "For many purposes CHTRF95 can be considered to be coincident with WGS 84.",
			'Origin' => "ETRF89 at epoch 1993.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}