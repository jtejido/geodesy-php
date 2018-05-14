<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class CR05 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Costa Rica 2005",
			'CRS' => 5365,
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
			'Area' => "Costa Rica",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "ITRF2000 at epoch 2005.83.  Network of 34 GPS stations throughout the country, five of which were connected to four Caribbean area ITRF stations.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}