<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class EST92 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Estonia 1992",
			'CRS' => 4133,
			'TranslationVectors' => array(
				'x' => -0.055,
				'y' => 0.541,
				'z' => 0.185,
			),
			'RotationalVectors' => array(
				'x' => -0.0183,
				'y' => 0.0003,
				'z' => 0.007,
			),
			'Scale' => 0.014,
			'Area' => "Estonia - onshore",
			'Remarks' => "",
			'Source' => "http://www.geo.ut.ee/",
			'Scope' => "?",
			'Origin' => "Densification from 4 ETRS89 points.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}