<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class GDA94 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Geocentric Datum of Australia 1994",
			'CRS' => 4283,
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
			'Area' => "Australia - GDA",
			'Remarks' => "Approximation at the +/- 3m level using inappropriate assumption that GDA94 is equivalent to WGS 84. Accuracy changed from 1m to 3m due to tectonic plate motion over more than 15 years.",
			'Source' => "OGP",
			'Scope' => "Spatial referencing with 3-metre accuracy.",
			'Origin' => "ITRF92 at epoch 1994.0.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}