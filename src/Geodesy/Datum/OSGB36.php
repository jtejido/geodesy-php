<?php

namespace Geodesy\Datum;

use Geodesy\Models\Airy1830;

class OSGB36 extends BaseDatum implements DatumInterface
{


    public function __construct()
    {
        parent::__construct(new Airy1830);
    }

    public function datum(): array
    {
        return array (
            'TranslationVectors' => array(
                'x' => -446.448,
                'y' => 125.157,
                'z' => -542.060,
                ),
            'RotationalVectors' => array (
                'x' => -0.1502,
                'y' => -0.2470,
                'z' => -0.8421,
                ),
            'Scale' => 20.4894,
        );
    }

}