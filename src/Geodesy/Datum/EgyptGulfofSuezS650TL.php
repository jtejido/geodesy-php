<?php

namespace Geodesy\Datum;

use Geodesy\Models\Helmert1906;

class EgyptGulfofSuezS650TL extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Egypt Gulf of Suez S-650 TL",
			'CRS' => 4706,
			'TranslationVectors' => array(
				'x' => 146.21,
				'y' => -112.63,
				'z' => -4.05,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Egypt - Gulf of Suez",
			'Remarks' => "Sometime referred to as 'Egypt 1907 to WGS 84'. However, application to WGS 84 coordinates of the reverse of this tfm results in Gulf of Suez S-650 TL, not Egypt 1907, position. Gulf of Suez S-650 TL and Egypt 1907 CRSs differ by some 20 metres.",
			'Source' => "Maridive",
			'Scope' => "Used for oil exploration by GUPCO.",
			'Origin' => "Fundamental point: Station S-650 DMX. Adopted coordinates: latitude: 28 degrees 19 minutes 02.1907 seconds N, longitude: 33 degrees 06 minutes 36.6344 seconds E (of Greenwich). The proper Egypt 1907 coordinates for S-650 differ from these by about 20m.",
		);

	public function __construct()
	{
		parent::__construct(new Helmert1906);
	}

}