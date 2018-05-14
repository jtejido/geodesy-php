<?php

namespace Geodesy\Datum;

use Geodesy\Models\AiryModified1849;

class TM65 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "TM65",
			'CRS' => 4299,
			'TranslationVectors' => array(
				'x' => -482.5,
				'y' => 130.6,
				'z' => -564.6,
			),
			'RotationalVectors' => array(
				'x' => -1.042,
				'y' => -0.214,
				'z' => -0.631,
			),
			'Scale' => -8.15,
			'Area' => "Europe - Ireland (Republic and Ulster) - onshore",
			'Remarks' => "Parameter values from TM75 to ETRS89 (2) (code 1953). Assumes each pair of (i) TM65 and TM75, and (ii) ETRS89 and WGS 84, can be considered the same to within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "For applications to an accuracy of 1 metre.",
			'Origin' => "Adjusted to best mean fit 12 stations of the OSNI 1952 primary adjustment.",
		);

	public function __construct()
	{
		parent::__construct(new AiryModified1849);
	}

}