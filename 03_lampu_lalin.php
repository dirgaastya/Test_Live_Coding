<?php
    $lampu = array('Merah', 'Kuning', 'Hijau');
    $index = 0;
    function lampu_lalin(){
        global $index,$lampu;
        $result = '';
        if($index < 3){
            $result = $lampu[$index];
            $index ++;
        }else{
            $index = 0;
        }
        return $result;
    }

    echo lampu_lalin();
    echo '<br/>';
    echo lampu_lalin();
    echo '<br/>';
    echo lampu_lalin();
    echo '<br/>';
    echo lampu_lalin();
    echo '<br/>';
    echo lampu_lalin();
    echo '<br/>';
    echo lampu_lalin();
    echo '<br/>';
    echo lampu_lalin();
    echo '<br/>';

?>
