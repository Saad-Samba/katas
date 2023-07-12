<?php

namespace App;

class PrimeFactors
{
    public static function generate($number){
        $factors = [];
        for ($diviser = 2; $number > 1; $diviser++){
            for (;$number % $diviser == 0; $number /= $diviser ){
                $factors[] = $diviser;
            };
        };
        return $factors;
    }
}