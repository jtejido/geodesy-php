<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class DRUKREF03 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Bhutan National Geodetic Datum",
			'CRS' => 5264,
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
			'Area' => "Bhutan",
			'Remarks' => "DRUKREF 03 and WGS 84 are both realisations of ITRS.",
			'Source' => "OGP",
			'Scope' => "For applications to an accuracy of 1 metre.",
			'Origin' => "ITRF2000 at epoch 2003.87",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}