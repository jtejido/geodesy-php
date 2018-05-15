<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS1980;

class NAD83 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "North American Datum 1983",
			'CRS' => 4269,
			'TranslationVectors' => array(
                'x' => 1.004,
                'y' => -1.910,
                'z' => -0.515,
			),
			'RotationalVectors' => array(
                'x' => 0.0267,
                'y' => 0.00034,
                'z' => 0.011,
			),
            'Scale' => -0.0015,
			'Area' => "North America - NAD83",
			'Remarks' => "Derived at 354 stations.",
			'Source' => "U.S. Defense Mapping Agency TR8350.2 revision of August 1993.",
			'Scope' => "Accuracy 2m in each axis.",
			'Origin' => "Origin at geocentre.",
		);

	public function __construct()
	{
		parent::__construct(new GRS1980);
	}

}