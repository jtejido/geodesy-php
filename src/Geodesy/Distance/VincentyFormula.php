<?php

namespace Geodesy\Distance;

use Geodesy\Location\LatLong;

class VincentyFormula extends BaseDistance implements DistanceInterface
{

    public function __construct(LatLong $source, LatLong $destination)
    {
        parent::__construct($source, $destination);
    }

    /**
     * Vincenty's formula is using an accurate ellipsoidal model of the earth as opposed to a pressumably perfectly spherical shape.
     * Vincenty’s solution for the distance between points on an ellipsoidal earth model is accurate to within a millimeter.
     * While it doesn't appear to take into account the seismic activity of the earth (yes, where we are right now isn't the same next year 
     * or decade, and so on), it depends on standards to give out a precise latitude and longitude data (http://itrf.ign.fr/ITRF_solutions/2014)
     * This is a long formula:
     * https://en.wikipedia.org/wiki/Vincenty%27s_formulae
     */
    public function distance(): float
    {

        $lat1 = $this->lat1;

        $lat2 = $this->lat2;

        $long1 = $this->long1;

        $long2 = $this->long2;

        $a = $this->getSemiMajorAxis();

        $b = $this->getSemiMinorAxis();

        $f = $this->getInverseFlattening();

        $L = $long2 - $long1;

        $tanU1 = (1-$f) * tan($lat1);

        $tanU2 = (1-$f) * tan($lat2);

        $cosU1 = 1 / sqrt((1 + pow($tanU1, 2) ));

        $sinU1 = $tanU1 * $cosU1;

        $cosU2 = 1 / sqrt((1 + pow($tanU2, 2) ));

        $sinU2 = $tanU2 * $cosU2;

        $lambda = $L;

        $lambdaPrime = 0;

        $iterations = 1000;

        $antimeridian = abs($L) > pi();

        do 
        {
            $sinLambda = sin($lambda);

            $cosLambda = cos($lambda);

            $sinSqSigma = pow($cosU2*$sinLambda, 2) + pow($cosU1*$sinU2-$sinU1*$cosU2*$cosLambda, 2);

            if ($sinSqSigma == 0) {
                break;
            }

            $sinSigma = sqrt($sinSqSigma);

            $cosSigma = $sinU1*$sinU2 + $cosU1*$cosU2*$cosLambda;

            $sigma = atan2($sinSigma, $cosSigma);

            $sinAlpha = $cosU1 * $cosU2 * $sinLambda / $sinSigma;

            $cosSqAlpha = 1 - pow($sinAlpha, 2);

            $cos2SigmaM = ($cosSqAlpha != 0) ? ($cosSigma - 2*$sinU1*$sinU2/$cosSqAlpha) : 0;

            $C = $f/16*$cosSqAlpha*(4+$f*(4-3*$cosSqAlpha));

            $lambdaPrime = $lambda;

            $lambda = $L + (1-$C) * $f * $sinAlpha * ($sigma + $C*$sinSigma*($cos2SigmaM+$C*$cosSigma*(-1+2*$cos2SigmaM*$cos2SigmaM)));

            $iterationCheck = $antimeridian ? abs($lambda)-pi() : abs($lambda);

            if ($iterationCheck > pi()) {
                throw new \Exception('lambda is greater than pi');
            } 
        
        } while (abs($lambda-$lambdaPrime) > 1e-12 && --$iterations >= 0);

        if ($iterations == 0) 
        {
            throw new \Exception('Failed to converge');
        }

        $uSq = $cosSqAlpha * (pow($a, 2) - pow($b,2)) / pow($b ,2);

        /**
         we'll use Helmert's expansion for A and B
         
         $k1 = (sqrt(1 + $uSq) - 1) / (sqrt(1 + $uSq) + 1);
         $A = 1 + ((1/4) * pow($k1, 2)) / (1 - $k1);
         $B = $k1 * (1 - ((3/8) * pow($k1, 2)));
        */


        $A = 1 + $uSq/16384*(4096+$uSq*(-768+$uSq*(320-175*$uSq)));
        $B = $uSq/1024 * (256+$uSq*(-128+$uSq*(74-47*$uSq)));


        $deltaSigma = $B*$sinSigma*($cos2SigmaM+$B/4*($cosSigma*(-1+2*pow($cos2SigmaM, 2))-
            $B/6*$cos2SigmaM*(-3+4*pow($sinSigma, 2))*(-3+4* pow($cos2SigmaM, 2))));
    
        $s = $b*$A*($sigma-$deltaSigma);


        return round($s, 3);
    }
}