<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class REGCAN95 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Red Geodesica de Canarias 1995",
			'CRS' => 4081,
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
			'Area' => "Spain - Canary Islands",
			'Remarks' => "Approximation at the +/- 1m level assuming that REGCAN95 is equivalent to WGS 84.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1m.",
			'Origin' => "ITRF93 at epoch 1994.9 at VLBI station Maspalomas on Grand Canary.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}