<?php 
function doEncrypt($theString){
    $str = str_split($theString);
    for($i = 0; $i < count($str) ; $i++){
        if($str[$i] == 'a'){
            $str[$i] = 'B';
        }
        elseif($str[$i] == 'b'){
            $str[$i] = 'u';
        }
        elseif($str[$i] == 'c'){
            $str[$i] = 'K';
        }
        elseif($str[$i] == 'd'){
            $str[$i] = 'E';
        }
        elseif($str[$i] == 'e'){
            $str[$i] = 'r';
        }
        elseif($str[$i] == 'f'){
            $str[$i] = 'O';
        }
    }
    return implode($str);;
}
?>