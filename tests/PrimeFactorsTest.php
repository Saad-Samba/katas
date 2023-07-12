<?php


use App\PrimeFactors;
use PHPUnit\Framework\TestCase;

class PrimeFactorsTest extends TestCase
{
    /**
     * @test
     *@dataProvider factors
     */
    function it_returns_prime_factors($number,$expected){

        $factors = PrimeFactors::generate($number);

        $this->assertEquals($factors,$expected);
    }

    public static function factors(){
        return [
            [1, []],
            [2,[2]],
            [9,[3,3]]
        ];
    }
}

