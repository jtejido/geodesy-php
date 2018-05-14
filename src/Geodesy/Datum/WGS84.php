<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84 as WGS84Model;

class WGS84 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "World Geodetic System 1984",
			'CRS' => 4326,
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
			'Area' => "World",
			'Remarks' => "",
			'Source' => "NIMA TR8350.2 January 2000 revision. http://earth-info.nga.mil/GandG/",
			'Scope' => "Used by the GPS satellite navigation system and for NATO military geodetic surveying.",
			'Origin' => "Earth’s center of mass being defined for the whole Earth including oceans and atmosphere. ",
		);

	public function __construct()
	{
		parent::__construct(new WGS84Model);
	}

}