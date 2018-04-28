<?php

namespace Geodesy\Datum;

use Geodesy\Models\GRS80;

class NAD83 extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new GRS80);
    }

    public function datum(): array
    {
        return array (
            'TranslationVectors' => array(
                'x' => 1.004,
                'y' => -1.910,
                'z' => -0.515,
                ),
            'RotationalVectors' => array (
                'x' => 0.0267,
                'y' => 0.00034,
                'z' => 0.011,
                ),
            'Scale' => -0.0015,
        );
    }

}