<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class NAD27 extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new Clarke1866);
    }

    public function datum(): array
    {
        return array (
            'TranslationVectors' => array(
                'x' => 8.0,
                'y' => -160.0,
                'z' => -176.0,
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