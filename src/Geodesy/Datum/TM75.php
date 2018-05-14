<?php

namespace Geodesy\Datum;

use Geodesy\Models\AiryModified1849;

class TM75 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Geodetic Datum of 1965",
			'CRS' => 4300,
			'TranslationVectors' => array(
                'x' => -482.5,
                'y' => 130.6,
                'z' => -564.6,
                ),
            'RotationalVectors' => array (
                'x' => -1.042,
                'y' => -0.214,
                'z' => -0.631,
                ),
            'Scale' => -8.15,
			'Area' => "Europe - Ireland (Republic and Ulster) - onshore",
			'Remarks' => "Parameter values taken from TM75 to ETRS89 (1) (code 1041) assuming that ETRS89 is coincident with WGS 84 within the accuracy of the transformation. Use iteration for reverse transformation WGS 84 to TM75. May be emulated by NTv2 alternative code 6947.",
			'Source' => "OGP",
			'Scope' => "Accuracy 1m.",
			'Origin' => "Adjusted to best mean fit 9 stations of the OSNI 1952 primary adjustment in Northern Ireland plus the 1965 values of 3 stations in the Republic of Ireland.",
		);

	public function __construct()
	{
		parent::__construct(new AiryModified1849);
	}

}