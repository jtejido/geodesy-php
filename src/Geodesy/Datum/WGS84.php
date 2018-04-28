<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS84Model;

class WGS84 extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new WGS84Model);
    }

    public function datum(): array
    {
        return array (
            'TranslationVectors' => array(
                'x' => 0.0,
                'y' => 0.0,
                'z' => 0.0,
                ),
            'RotationalVectors' => array (
                'x' => 0.0,
                'y' => 0.0,
                'z' => 0.0,
                ),
            'Scale' => 0.0,
        );
    }

}