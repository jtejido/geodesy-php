<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class AinelAbd extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Ain el Abd 1970",
			'CRS' => 4204,
			'TranslationVectors' => array(
				'x' => 150,
				'y' => 250,
				'z' => 1,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Asia - Middle East - Bahrain, Kuwait and Saudi Arabia",
			'Remarks' => "Derived at 2 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Ain El Abd.  Latitude: 28 degrees 14 minutes 06.171 seconds N, longitude: 48 degrees 16 minutes 20.906 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}