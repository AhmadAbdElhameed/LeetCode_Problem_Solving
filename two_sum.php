<?php


     function twoSum($num,$target){
        $number1 = 0;
        $number2 = 0;
        for ($i = 0;$i < count($num);$i++){
            $number1 = $num[$i];
            for($j = 0;$j < count($num) ; $j++){
                $number2 = $num[$j];

                if (($number1 + $number2) == $target && $i != $j){
                    return [$i,$j];
                }
            }

        }
    }

    $sum = twoSum([3,5,8,3],6);

     print_r($sum); ;

?>