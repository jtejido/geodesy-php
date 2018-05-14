<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class DealulPiscului1930 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Dealul Piscului 1930",
			'CRS' => 4316,
			'TranslationVectors' => array(
				'x' => -103.25,
				'y' => 100.4,
				'z' => 307.19,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Romania - onshore",
			'Remarks' => "",
			'Source' => "Petromar and NAMR",
			'Scope' => "Oil exploration",
			'Origin' => "Fundamental point: latitude 44 degrees 24 minutes 33.9606 seconds N, longitude 26 degrees 06 minutes 44.8772 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}