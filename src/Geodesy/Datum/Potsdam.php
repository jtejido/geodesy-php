<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class Potsdam extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new Bessel1841);
    }

    public function datum(): array
    {
        return array (
            'TranslationVectors' => array(
                'x' => -582,
                'y' => -105,
                'z' => -414,
                ),
            'RotationalVectors' => array (
                'x' => 1.04,
                'y' => 0.35,
                'z' => -3.08,
                ),
            'Scale' => -8.3,
        );
    }

}