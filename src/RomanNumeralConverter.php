<?php

namespace Braddle;

class RomanNumeralConverter
{
    public function convert($numerals)
    {
        $numerals = strtoupper($numerals);
        $numerals = str_split($numerals);
        $total = 0;
        $previous = null;

        foreach ($numerals as $numeral) {
            $value = $this->convertSingleNumeral($numeral);

            if (is_null($previous) || $value == $previous) {
                $total += $value;
            }

            $previous = $value;
        }

        return $total;
    }

    private function convertSingleNumeral($numeral)
    {
        switch ($numeral) {
            case "I":
                return 1;
            case "V":
                return 5;
            case "X":
                return 10;
            case "L":
                return 50;
            case "C":
                return 100;
            case "D":
                return 500;
            case "M":
                return 1000;
        }
    }
}
