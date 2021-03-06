<?php

// https://en.wikipedia.org/wiki/6174_(number)
// Take any four-digit number, using at least two different digits (leading zeros are allowed).
// Arrange the digits in descending and then in ascending order to get two four-digit numbers, adding leading zeros if necessary.
//    Subtract the smaller number from the bigger number.
//Go back to step 2 and repeat.

class KaprekarsConstant
{

    public function SixOneSevenFour(): void
    {
        for ($i = 1000; $i <= 9999; $i++) {
            $number = $i;

            while($this->DigitsNotSame($number) !== true){
                $i++;
            }

            $ans = 0;
            $step = 1;
            while ($ans !== 6174) {
                print "Start:" . $number . "\n";

                $arr1 = str_split($number);
                sort($arr1);
                $des = [];
                foreach ($arr1 as $val1) {
                    $des[] = $val1;
                }

                $arr2 = str_split($number);
                rsort($arr2);
                $asc = [];
                foreach ($arr2 as $val2) {
                    $asc[] = $val2;
                }

                $num1 = implode($asc);
                $num2 = implode($des);

                $ans = $num1 - $num2;
                print "step:" . $step . "\nnumber1:" . $num1 . "\nnumber2:" . $num2 . "\nanswer:" . $ans . "\n\n";
                $step++;
                $number = $ans;

                if($number < 1000 && $number >= 100){
                    $number = array($number);
                    $number[] = 0;
                    $number = implode($number);

                }
                if($number < 100 && $number >= 10){
                    $number = array($number);
                    $number[] = 00;
                    $number = implode($number);
                }
                if($number < 10 && $number >= 1){
                    $number = array($number);
                    $number[] = 000;
                    $number = implode($number);
                }

            }
        }
    }

    public function DigitsNotSame($number): bool
    {
        $number = str_split($number);
        $is_true = false;

        $uniq = array_unique($number);
        $count = count($uniq);

        if($count !== 1){
            $is_true = true;

        }
        return $is_true;
    }
}