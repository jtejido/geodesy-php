<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class RGFG95 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reseau Geodesique Francais Guyane 1995",
			'CRS' => 4624,
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
			'Area' => "French Guiana",
			'Remarks' => "Replaces RGFG95 to WGS 84 (1) (code 1907) which was not put into official use but issued in error.",
			'Source' => "IGN Paris.",
			'Scope' => "Accuracy +/- 2 metres.",
			'Origin' => "ITRF93 at epoch 1995.0",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}