<?php

use App\RomanNumeral;
use PHPUnit\Framework\TestCase;

class RomanNumeralConverterTest extends TestCase
{
    /**
     * @test
     * @dataProvider checks
     */
    function it_converts_to_Roman_representation($arabic,$roman){
        $representation = RomanNumeral::convert($arabic);
        self::assertEquals($roman,$representation);
    }

    static function checks(){
        return [
            [1, "I"],
            [2, "II"],
            [4, "IV"],
            [5, "V"],
            [6, "VI"],
            [7, "VII"],
            [8, "VIII"],
            [9, "IX"],
            [10, "X"],
            [11, "XI"],
            [15, "XV"],
            [19, "XIX"],
            [40, "XL"],
            [50, "L"],
            [100, "C"],
            [3999, "MMMCMXCIX"],

        ];
    }

}
