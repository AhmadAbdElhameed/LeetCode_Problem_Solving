<?php


class Solution {

    /**
     * @param String $date
     * @return String
     */
    function reformatDate($date) {

        $date_array = explode(" ",$date,3);

        $day = (int)$date_array[0];
        $day = ($day < 10 ? "0".$day : $day);

        $month = $date_array[1];
        $date_month = date_parse($month);
        $date_month = $date_month['month'];
        $date_month = ($date_month < 10 ? "0".$date_month : $date_month);

        $year = $date_array[2];

        return ($year."-".$date_month."-".$day);
    }
}

echo (new Solution)->reformatDate("20th Oct 2052");
