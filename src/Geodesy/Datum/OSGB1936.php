<?php

namespace Geodesy\Datum;

use Geodesy\Models\Airy1830;

class OSGB1936 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "OSGB 1936",
			'CRS' => 4277,
            'TranslationVectors' => array(
                'x' => -446.448,
                'y' => 125.157,
                'z' => -542.060,
                ),
            'RotationalVectors' => array (
                'x' => -0.150,
                'y' => -0.247,
                'z' => -0.842,
                ),
            'Scale' => 20.489,
			'Area' => "UK - Britain and UKCS 49?46'N to 61?01'N, 7?33'W to 3?33'E",
			'Remarks' => "Parameter values taken from OSGB 1936 to ETRS89 (1) (tfm code 5338) assuming that ETRS89 is coincident with WGS 84 within the accuracy of the tfm. Within accuracy of the tfm equivalent to OSGB 1936 / British National Grid to WGS 84 (2) (tfm code 15956).",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "Prior to 2002, fundamental point: Herstmonceux, Latitude: 50 degrees 51 minutes 55.271 seconds N, longitude: 0 degrees 20 minutes 45.882 seconds E (of Greenwich). From April 2002 the datum is defined through the application of the OSTN transformation from ETRS89.",
		);

	public function __construct()
	{
		parent::__construct(new Airy1830);
	}

}