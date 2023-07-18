<?php


    function containsDuplicate($nums){
        $check = array_unique($nums);
        if (count($check) == count($nums)){
            return false;
        }else{
            return true;
        }
    }

//    $temp = containsDuplicate([1,2,3,4,1]);
//
//    print_r($temp);

?>