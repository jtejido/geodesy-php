<?php

namespace Geodesy\Datum;

use Geodesy\Models\International1924;

class HongKong1980 extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Hong Kong 1980",
			'CRS' => 4611,
			'TranslationVectors' => array(
				'x' => 162.619,
				'y' => 276.959,
				'z' => 161.764,
			),
			'RotationalVectors' => array(
				'x' => 0.067753,
				'y' => -2.243649,
				'z' => -1.158827,
			),
			'Scale' => 1.094246,
			'Area' => "China - Hong Kong",
			'Remarks' => "Published 1st March 2002. Parameter values from Hong Kong 1980 to Hong Kong Geodetic CS (1) (code 8437) with change of rotation convention. Assumes Hong Kong Geodetic CS and WGS 84 are equivalent within the accuracy of the transformation.",
			'Source' => "Geodetic Survey Section, Survey and Mapping Office, Lands Department, Hong Kong. http://www.info.gov.hk/landsd/mapping/tindex.htm",
			'Scope' => "Accuracy to 1m level.",
			'Origin' => "Fundamental point: Trig  seconds Zero seconds , 38.4 feet south along the transit circle of the Kowloon Observatory. Latitude 22 degrees 18 minutes 12.82 seconds N, longitude 114 degrees 10 minutes 18.75 seconds E (of Greenwich).",
		);

	public function __construct()
	{
		parent::__construct(new International1924);
	}

}