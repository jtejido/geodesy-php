<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class MOLDREF99 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "MOLDREF99",
			'CRS' => 4023,
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
			'Area' => "Moldova",
			'Remarks' => "Parameter values from MOLDREF99 to ETRS89 (1) (code 5584). Assumes ETRS89 and WGS 84 can be considered the same to within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "For applications with an accuracy of 1m.",
			'Origin' => "Densification of ETRS89.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}