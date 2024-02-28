<?php

    function getMostCharacter($string){
        $arr = str_split(strtolower($string));
        $charCount = array_count_values($arr);

        $char = '';
        $countMax = 0;
        for ($i=0; $i < strlen($string); $i++) {
            if($countMax < $charCount[strtolower($string[$i])]){
                $countMax = $charCount[strtolower($string[$i])];
                $char =strtolower($string[$i]);
            }
        }
        return $char . ' '. $countMax.'x' ;
    }

    $string = 'Helooo';

    echo(getMostCharacter($string));

?>
