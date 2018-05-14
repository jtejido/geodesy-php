<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class Pitcairn2006 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Pitcairn 2006",
			'CRS' => 4763,
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
			'Area' => "Pitcairn - Pitcairn Island",
			'Remarks' => "Approximation at the +/- 1m level assuming that Pitcairn 2006 is equivalent to WGS 84.",
			'Source' => "OGP",
			'Scope' => "Accuracy +/- 1 metre.",
			'Origin' => "Fundamental point: Pitcairn Astro. Latitude: 25 degrees 04 minutes 06.7894 seconds S, longitude: 130 degrees 06 minutes 46.6816 seconds W (of Greenwich), derived by single point GPS oberservations.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}