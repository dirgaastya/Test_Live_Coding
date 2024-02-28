<?php
    $intArr = array(10,23,14,33,50);

    function getSecondMaxNum($arr){
        rsort($arr);
        return $arr[1];
    }

   echo getSecondMaxNum($intArr);
?>
