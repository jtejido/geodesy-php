<?php

namespace Geodesy\Datum;

use Geodesy\Models\Airy1830;

class OSNI1952 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "OSNI 1952",
			'CRS' => 4188,
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
			'Area' => "UK - Northern Ireland - onshore",
			'Remarks' => "Parameter values from TM75 to ETRS89 (2) (code 1953). Assumes each pair of (i) OSNI 1952 and TM75, and (ii) ETRS89 and WGS 84, can be considered the same to within the accuracy of the transformation.",
			'Source' => "OGP",
			'Scope' => "For applications to an accuracy of 1 metre.",
			'Origin' => "Position fixed to the coordinates from the 19th century Principle Triangulation of station Divis. Scale and orientation controlled by position of Principle Triangulation stations Knocklayd and Trostan.",
		);

	public function __construct()
	{
		parent::__construct(new Airy1830);
	}

}