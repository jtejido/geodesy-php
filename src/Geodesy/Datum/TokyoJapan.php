<?php

namespace Geodesy\Datum;

use Geodesy\Models\Bessel1841;

class TokyoJapan extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new Bessel1841);
    }

    public function datum(): array
    {
        return array (
            'TranslationVectors' => array(
                'x' => 148,
                'y' => -507,
                'z' => -685,
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