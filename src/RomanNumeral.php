<?php

namespace App;

class RomanNumeral
{
    public static function convert_up_to_number_3($arabic_number){
        $roman_representation = '';
        for ($i = 0; $i<$arabic_number; $i++){
            $roman_representation = $roman_representation."I";
        }
        return $roman_representation;
    }

    public static function convert_4(){
        return 'IV';
    }

    public static function convert_5(){
        return 'V';
    }

    public static function convert_6_to_8($arabic_number){
        $roman_representation = 'V';
        for ($i = 5; $i<$arabic_number; $i++){
            $roman_representation = $roman_representation."I";
        }
        return $roman_representation;
    }
}