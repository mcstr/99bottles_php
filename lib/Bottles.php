<?php

use phpDocumentor\Reflection\Types\Self_;

class Bottles
{
    public function verse($number)
    {
        $bottles = $number;
        $drunk = false;

        while (!$drunk) {
            switch ($bottles) {
                case (0):
                    $bottles = 99;
                    $sentence = "No more bottles of beer on the wall, " .
                        "no more bottles of beer.\n" .
                        "Go to the store and buy some more, " .
                        "$bottles bottles of beer on the wall.\n";
                    return $sentence;
                    break;
                case ($bottles > 2):
                    $oneLessBottle = $bottles - 1;
                    $sentence = "$bottles bottles of beer on the wall, " .
                        "$bottles bottles of beer.\n" .
                        "Take one down and pass it around, " .
                        "$oneLessBottle bottles of beer on the wall.\n";
                    $bottles = $oneLessBottle;
                    return $sentence;
                    break;
                case (2):
                    $oneLessBottle = $bottles - 1;
                    $sentence = "$bottles bottles of beer on the wall, " .
                        "$bottles bottles of beer.\n" .
                        "Take one down and pass it around, " .
                        "$oneLessBottle bottle of beer on the wall.\n";
                    $bottles = $oneLessBottle;
                    return $sentence;
                    break;
                case (1):
                    $sentence = "$bottles bottle of beer on the wall, " .
                        "$bottles bottle of beer.\n" .
                        "Take it down and pass it around, " .
                        "no more bottles of beer on the wall.\n";
                    $bottles--;
                    return $sentence;
                    break;
            }
        }
    }

    public function verses($number1, $number2)
    {
        return $this->verse($number1) . "\n" . $this->verse($number2);

        // return "2 bottles of beer on the wall, " .
        //     "2 bottles of beer.\n" .
        //     "Take one down and pass it around, " .
        //     "1 bottle of beer on the wall.\n" .
        //     "\n" .
        //     "1 bottle of beer on the wall, " .
        //     "1 bottle of beer.\n" .
        //     "Take it down and pass it around, " .
        //     "no more bottles of beer on the wall.\n" .
        //     "\n" .
        //     "No more bottles of beer on the wall, " .
        //     "no more bottles of beer.\n" .
        //     "Go to the store and buy some more, " .
        //     "99 bottles of beer on the wall.\n";

        $range = range($number1, $number2);

        if (count($range) > 2) {
            foreach ($range as $value) {
                if ($value === 0) {
                    return $this->verse($value);
                } else {
                    return $this->verse($value) . "\n";
                }
            }
        } else {
            return $this->verse($number1) . "\n" . $this->verse($number2);
        }
    }
}
