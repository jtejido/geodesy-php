<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880RGS;

class Dominica1945 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Dominica 1945",
			'CRS' => 4602,
			'TranslationVectors' => array(
				'x' => -725,
				'y' => -685,
				'z' => -536,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Dominica - onshore",
			'Remarks' => "",
			'Source' => "Ordnance Survey of Great Britain",
			'Scope' => "?",
			'Origin' => "Fundamental point: station M12.",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880RGS);
	}

}