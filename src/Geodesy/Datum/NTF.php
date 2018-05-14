<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class NTF extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Nouvelle Triangulation Francaise",
			'CRS' => 4275,
			'TranslationVectors' => array(
				'x' => 168,
				'y' => 60,
				'z' => -320,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "France - onshore - mainland and Corsica",
			'Remarks' => "These same parameter values are used to transform to ETRS89. See NTF to ETRS89 (1) (code 1651).",
			'Source' => "IGN technical report RT/G 14; January 1988.",
			'Scope' => "For applications to an accuracy of 2 metres.",
			'Origin' => "Fundamental point: Pantheon. Latitude: 48 degrees 50 minutes 46.522 seconds N, longitude: 2 degrees 20 minutes 48.667 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880IGN);
	}

}