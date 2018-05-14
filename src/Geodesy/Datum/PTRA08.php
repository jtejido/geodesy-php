<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class PTRA08 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Autonomous Regions of Portugal 2008",
			'CRS' => 5013,
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
			'Area' => "Portugal - Azores and Madeira",
			'Remarks' => "",
			'Source' => "OGP",
			'Scope' => "PTRA08 and WGS 84 are realizations of ITRS coincident to within 1 metre. This transformation has an accuracy equal to the coincidence figure.",
			'Origin' => "ITRF93 as derived from the 1994 TransAtlantic Network for Geodynamics and Oceanography (TANGO) project.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}