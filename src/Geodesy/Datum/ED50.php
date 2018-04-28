<?php

namespace Geodesy\Datum;

use Geodesy\Models\Intl1924;

class ED50 extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new Intl1924);
    }

    public function datum(): array
    {
        return array (
            'TranslationVectors' => array(
                'x' => 89.5,
                'y' => 93.8,
                'z' => 123.1,
                ),
            'RotationalVectors' => array (
                'x' => 0.0,
                'y' => 0.0,
                'z' => 0.156,
                ),
            'Scale' => -1.2,
        );
    }

}