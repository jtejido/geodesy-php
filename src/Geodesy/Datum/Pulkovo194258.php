<?php

namespace Geodesy\Datum;

use Geodesy\Models\Krassowsky1940;

class Pulkovo194258 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Pulkovo 1942(58)",
			'CRS' => 4179,
			'TranslationVectors' => array(
				'x' => -74.5,
				'y' => 112.5,
				'z' => 44.3,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Europe - onshore - eastern - S-42(58)",
			'Remarks' => "Derived by Deminex for nearshore Rodoni block in 1991-1992. Used by Shell for onshore seismic in 1995.",
			'Source' => "Shell Global Solutions International.",
			'Scope' => "Oil industry exploration and production.",
			'Origin' => "Fundamental point: Pulkovo observatory. Latitude: 59 degrees 46 minutes 18.550 seconds N, longitude: 30 degrees 19 minutes 42.090 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Krassowsky1940);
	}

}