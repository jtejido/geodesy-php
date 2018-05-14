<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class PortoSanto extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Porto Santo 1936",
			'CRS' => 4615,
			'TranslationVectors' => array(
				'x' => 499,
				'y' => 249,
				'z' => -314,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Portugal - Madeira archipelago onshore",
			'Remarks' => "Derived at 2 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 rev 3, January 2000. http://earth-info.nga.mil/GandG/",
			'Scope' => "For military purposes only. Accuracy 25m in each axis.",
			'Origin' => "SE Base on Porto Santo island.",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}