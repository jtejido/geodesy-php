<?php

namespace Geodesy\Datum;

use Geodesy\Models\WGS72Model;

class WGS72 extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new WGS72Model);
    }

    public function datum(): array
    {
        return array (
            'TranslationVectors' => array(
                'x' => 0.0,
                'y' => 0.0,
                'z' => -4.5,
                ),
            'RotationalVectors' => array (
                'x' => 0.0,
                'y' => 0.0,
                'z' => 0.554,
                ),
            'Scale' => -0.22,
        );
    }

}