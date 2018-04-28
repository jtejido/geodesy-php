<?php

namespace Geodesy\Datum;

use Geodesy\Models\PRS92Model;

class PRS92 extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new PRS92Model);
    }

    public function datum()
    {
        return array (
            'TranslationVectors' => array(
                'x' => 127.62195,
                'y' => 67.24478,
                'z' => 47.04305,
                ),
            'RotationalVectors' => array (
                'x' => -1.48722,
                'y' => 2.37700,
                'z' => 7.64988,
                ),
            'Scale' => 1.06002,
        );
    }

}