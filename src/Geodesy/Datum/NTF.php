<?php

namespace Geodesy\Datum;

use Geodesy\Models\Clarke1880IGN;

class NTF extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new Clarke1880IGN);
    }

    public function datum()
    {
        return array (
            'TranslationVectors' => array(
                'x' => 168.0,
                'y' => 60.0,
                'z' => -320.0,
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