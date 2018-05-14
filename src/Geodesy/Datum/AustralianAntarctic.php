<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class AustralianAntarctic extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Australian Antarctic Datum 1998",
			'CRS' => 4176,
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
			'Area' => "Antarctica - Australian sector",
			'Remarks' => "For many purposes Australian Antarctic can be considered to be coincident with WGS 84.",
			'Source' => "OGP",
			'Scope' => "Approximation at the +/- 1m level assuming that Australian Antarctic is equivalent to WGS 84.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}