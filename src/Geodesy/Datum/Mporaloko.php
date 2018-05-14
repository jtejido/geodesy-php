<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class Mporaloko extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "M'poraloko",
			'CRS' => 4266,
			'TranslationVectors' => array(
				'x' => 74,
				'y' => 130,
				'z' => -42,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Gabon",
			'Remarks' => "Derived at 1 station.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880IGN);
	}

}