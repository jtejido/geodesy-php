<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class Beduaram extends BaseDatum implements DatumInterface
{

	CONST DATUM = array (
			'Name' => "Beduaram",
			'CRS' => 4213,
			'TranslationVectors' => array(
				'x' => 106,
				'y' => 87,
				'z' => -188,
			),
			'RotationalVectors' => array(
				'x' => 0,
				'y' => 0,
				'z' => 0,
			),
			'Scale' => 0,
			'Area' => "Niger - southeast",
			'Remarks' => "Used by Elf / CGG between December 1991 and March 1992. Probably derived from results of concatenated tfm Beduaram to WGS 84 (1) (code 8634).",
			'Source' => "Total",
			'Scope' => "Oil exploration.",
			'Origin' => "",
		);

	public function __construct()
	{
		parent::__construct(new Clarke1880IGN);
	}

}