<?php

namespace Geodesy\Datum;

use Geodesy\Models\Everest18301937Adjustment;

class Nepal1981 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Nepal 1981",
			'CRS' => 6207,
			'TranslationVectors' => array(
				'x' => -293.17,
				'y' => -726.18,
				'z' => -245.36,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Nepal",
			'Remarks' => "Derived at 11 points.",
			'Source' => "Nepalese Journal on Geoinformatics June 2011.",
			'Scope' => "Topographic mapping. Accuracy 0.26m (1-sigma).",
			'Origin' => "Fundamental point: Station 12/157 Nagarkot. Latitude: 27 degrees 41 minutes 31.04 seconds N, longitude: 85 degrees 31 minutes 20.23 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new Everest18301937Adjustment);
	}

}