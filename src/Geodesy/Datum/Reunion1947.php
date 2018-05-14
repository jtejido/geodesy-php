<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class Reunion1947 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reunion 1947",
			'CRS' => 4626,
			'TranslationVectors' => array(
				'x' => -94,
				'y' => 948,
				'z' => 1262,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Reunion - onshore",
			'Remarks' => "Derived at 1 station.",
			'Source' => "IGN (in 2005). Also U.S. National Imagery and Mapping Agency TR8350.2 revision of October 1997; http://earth-info.nga.mil/GandG/",
			'Scope' => "For military purposes. Accuracy 25m in each axis.",
			'Origin' => "Fundamental point: Piton des Neiges (Borne). Latitude: 21 degrees 05 minutes 13.119 seconds S, longitude: 55 degrees 29 minutes 09.193 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}