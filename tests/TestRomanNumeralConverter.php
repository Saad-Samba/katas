<?php


use PHPUnit\Framework\TestCase;

class TestRomanNumeralConverter extends TestCase
{
    public function it_converts_1_to_Roman_representation(){
        $representation = RomanNumeral::convert();
        self::assertEquals('I',$representation);
    }

}
