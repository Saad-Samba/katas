<?php

use App\RomanNumeral;
use PHPUnit\Framework\TestCase;

class RomanNumeralConverterTest extends TestCase
{
    /**
     * @test
     */
    function it_converts_1_to_Roman_representation(){
        $representation = RomanNumeral::convert_up_to_number_3(1);
        self::assertEquals('I',$representation);
    }

    /**
     * @test
     */
    function it_converts_2_to_Roman_representation(){
        $representation = RomanNumeral::convert_up_to_number_3(2);
        self::assertEquals('II',$representation);
    }

    /**
     * @test
     */
    function it_converts_3_to_Roman_representation(){
        $representation = RomanNumeral::convert_up_to_number_3(3);
        self::assertEquals('III',$representation);
    }

    /**
     * @test
     */
    function it_converts_4_to_Roman_representation(){
        $representation = RomanNumeral::convert_4();
        self::assertEquals('IV',$representation);
    }

    /**
     * @test
     */
    function it_converts_5_to_Roman_representation(){
        $representation = RomanNumeral::convert_5();
        self::assertEquals('V',$representation);
    }

    /**
     * @test
     */
    function it_converts_6_to_Roman_representation(){
        $representation = RomanNumeral::convert_6_to_8(6);
        self::assertEquals('VI',$representation);
    }

    /**
     * @test
     */
    function it_converts_7_to_Roman_representation(){
        $representation = RomanNumeral::convert_6_to_8(7);
        self::assertEquals('VII',$representation);
    }

    /**
     * @test
     */
    function it_converts_8_to_Roman_representation(){
        $representation = RomanNumeral::convert_6_to_8(8);
        self::assertEquals('VIII',$representation);
    }

}
