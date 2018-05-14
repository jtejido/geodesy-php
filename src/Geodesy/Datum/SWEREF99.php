<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class SWEREF99 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "SWEREF99",
			'CRS' => 4619,
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
			'Area' => "Sweden",
			'Remarks' => "Parameter values taken from SWEREF to ETRS89 (1) (code 1878) assuming that ETRS89 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Geographic Information Systems.",
			'Origin' => "Densification of ETRS89.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}