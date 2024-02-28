<?php
    function generate_random_string($length){
        $char = '012345679abcdefghijklmnopqrstupwxyzABCDEFGHIJKLMNOPQRSTUPWXYZ';
        $result = '';
        for ($i=0; $i < $length; $i++) {
            $result .= $char[rand(0, strlen($char)-1)];
        }

        return $result;
    }
    $tokens = array();

    function generate_token($user){
        global $tokens;
        $token = generate_random_string(15);



        if(!isset($tokens[$user])){
            $tokens[$user] = array($token);
        }else{
            if (count($tokens[$user]) == 10) {
                array_shift($tokens[$user]);
                array_unshift($tokens[$user], $token);
            }else {
                array_push($tokens[$user], $token);
            }
        }
        return $token;
    }

    function verify_token($user, $token){
        global $tokens;
        if(isset($tokens[$user])){
            $indexToken = array_search($token,$tokens[$user]);
            unset($tokens[$user][$indexToken]);
            return true;
        }
        return false;
    }
    $user = 'Dirga';
   generate_token($user);
   generate_token($user);
   generate_token($user);
    $user2 = 'Astya';
    $token2 = generate_token($user2);

    echo(verify_token($user2,$token2));
?>
