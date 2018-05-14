<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class RGRDC2005 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Reseau Geodesique de la RDC 2005",
			'CRS' => 4046,
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
			'Area' => "Congo DR (Zaire) - south",
			'Remarks' => "Approximation at the +/- 1m level assuming that RGRDC 2005 is equivalent to WGS 84 within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "ITRF2000 at epoch 2005.4.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}