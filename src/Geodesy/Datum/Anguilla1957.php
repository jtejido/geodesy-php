<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Anguilla1957 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Anguilla 1957",
			'CRS' => 4600,
			'TranslationVectors' => array(
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Anguilla - onshore",
			'Remarks' => "",
			'Source' => "Ordnance Survey of Great Britain",
			'Scope' => "?",
			'Origin' => "Fundamental point: station A4, Police.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}