<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84;

class CGRS93 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Cyprus Geodetic Reference System 1993",
			'CRS' => 6311,
			'TranslationVectors' => array(
				'x' => -8.846,
				'y' => 4.394,
				'z' => 1.122,
			),
			'RotationalVectors' => array(
				'x' => 0.00237,
				'y' => 0.146528,
				'z' => -0.130428,
			),
			'Scale' => -0.783926,
			'Area' => "Cyprus - onshore",
			'Remarks' => "Parameter values from CGRS93 to ETRS89 (1) (code 7720). Approximation at the +/- 1m level assuming that ETRS89 is equivalent to WGS 84.",
			'Source' => "Cyprus Department of Lands and Surveys (DLS).",
			'Scope' => "Small scale hydrographic and aviation  mapping.",
			'Origin' => "Station Chionistra (Mount Troodos). Network scale and orientation determined by connection of six stations to ITRF91 in Europe at epoch 1993.1.",
		);

	public function __construct()
	{
		parent::__construct(new WGS84);
	}

}