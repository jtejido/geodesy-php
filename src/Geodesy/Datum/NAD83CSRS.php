<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class NAD83CSRS extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "NAD83 Canadian Spatial Reference System",
			'CRS' => 4617,
			'TranslationVectors' => array(
				'x' => 0.991,
				'y' => -1.9072,
				'z' => -0.5129,
			),
			'RotationalVectors' => array(
				'x' => -0.000000125033,
				'y' => -0.000000046785,
				'z' => -0.000000056529,
			),
			'Scale' => 0,
			'Area' => "Canada",
			'Remarks' => "Approximation derived from tfm code 6864 ignoring time-dependent parameters and assuming ITRF96(1997.0) and WGS 84 can be considered the same within the accuracy of the transformation.",
			'Source' => "'Realization and Unification of NAD83 in Canada and the U.S. via the ITRF' by Cramer et al, IAG Proceedings, Section II, Munich, October 5-9, 1998; revised 11 March 1999.",
			'Scope' => "Geodesy.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}