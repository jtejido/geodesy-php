<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class ChathamIslands1971 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Chatham Islands Datum 1971",
			'CRS' => 4672,
			'TranslationVectors' => array(
				'x' => -175,
				'y' => 38,
				'z' => -113,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "New Zealand - Chatham Islands group",
			'Remarks' => "Derived at 4 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 rev 3, January 2000. http://earth-info.nga.mil/GandG/tr8350/tr8350_2.html",
			'Scope' => "For military purposes. Accuracy 15m in each axis.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}