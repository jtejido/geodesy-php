<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1866;

class LuzonB extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new Clarke1866);
    }

    public function datum()
    {
        return array (
            'TranslationVectors' => array(
                'x' => -133,
                'y' => -79,
                'z' => -72,
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