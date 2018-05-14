<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class GDBD2009 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Geocentric Datum Brunei Darussalam 2009",
			'CRS' => 5246,
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
			'Area' => "Brunei",
			'Remarks' => "Approximation at the +/- 1m level assuming that GDBD2009 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "ITRF2005 at epoch 2009.45",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}