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
        elseif($str[$i] == 'g'){
            $str[$i] = 'S';
        }
        elseif($str[$i] == 'h'){
            $str[$i] = 'o';
        }
        elseif($str[$i] == 'i'){
            $str[$i] = 'h';
        }
        elseif($str[$i] == 'j'){
            $str[$i] = 'G';
        }
        elseif($str[$i] == 'k'){
            $str[$i] = 'a';
        }
        elseif($str[$i] == 'l'){
            $str[$i] = 'z';
        }
        elseif($str[$i] == 'm'){
            $str[$i] = 'T';
        }
        elseif($str[$i] == 'n'){
            $str[$i] = '4';
        }
        elseif($str[$i] == 'o'){
            $str[$i] = '8';
        }
        elseif($str[$i] == 'p'){
            $str[$i] = 'C';
        }
        elseif($str[$i] == 'q'){
            $str[$i] = 'F';
        }
        elseif($str[$i] == 'r'){
            $str[$i] = 'b';
        }
        elseif($str[$i] == 's'){
            $str[$i] = 'f';
        }
        elseif($str[$i] == 't'){
            $str[$i] = '5';
        }
        elseif($str[$i] == 'u'){
            $str[$i] = 'Z';
        }
        elseif($str[$i] == 'v'){
            $str[$i] = 'd';
        }
        elseif($str[$i] == 'w'){
            $str[$i] = 'A';
        }
        elseif($str[$i] == 'x'){
            $str[$i] = 'p';
        }
        elseif($str[$i] == 'y'){
            $str[$i] = 'l';
        }
        elseif($str[$i] == 'z'){
            $str[$i] = 'c';
        }
        elseif($str[$i] == 'A'){
            $str[$i] = 'D';
        }
        elseif($str[$i] == 'B'){
            $str[$i] = 'n';
        }
        elseif($str[$i] == 'C'){
            $str[$i] = 'm';
        }
        elseif($str[$i] == 'D'){
            $str[$i] = '0';
        }
        elseif($str[$i] == 'E'){
            $str[$i] = 'J';
        }
        elseif($str[$i] == 'F'){
            $str[$i] = 'R';
        }
        elseif($str[$i] == 'G'){
            $str[$i] = 'j';
        }
        elseif($str[$i] == 'H'){
            $str[$i] = '2';
        }
        elseif($str[$i] == 'I'){
            $str[$i] = 'L';
        }
        elseif($str[$i] == 'J'){
            $str[$i] = 'e';
        }
        elseif($str[$i] == 'K'){
            $str[$i] = 'g';
        }
        elseif($str[$i] == 'L'){
            $str[$i] = 's';
        }
        elseif($str[$i] == 'M'){
            $str[$i] = 'Y';
        }
        elseif($str[$i] == 'N'){
            $str[$i] = 't';
        }
        elseif($str[$i] == 'O'){
            $str[$i] = 'H';
        }
        elseif($str[$i] == 'P'){
            $str[$i] = 'i';
        }
        elseif($str[$i] == 'Q'){
            $str[$i] = 'w';
        }
        elseif($str[$i] == 'R'){
            $str[$i] = 'I';
        }
        elseif($str[$i] == 'S'){
            $str[$i] = 'x';
        }
        elseif($str[$i] == 'T'){
            $str[$i] = 'M';
        }
        elseif($str[$i] == 'U'){
            $str[$i] = 'N';
        }
        elseif($str[$i] == 'V'){
            $str[$i] = 'W';
        }
        elseif($str[$i] == 'W'){
            $str[$i] = 'y';
        }
        elseif($str[$i] == 'X'){
            $str[$i] = 'k';
        }
        elseif($str[$i] == 'Y'){
            $str[$i] = 'q';
        }
        elseif($str[$i] == 'Z'){
            $str[$i] = 'P';
        }
        elseif($str[$i] == ' '){
            $str[$i] = '*';
        }
        elseif($str[$i] == '0'){
            $str[$i] = 'Q';
        }
        elseif($str[$i] == '1'){
            $str[$i] = 'v';
        }
        elseif($str[$i] == '2'){
            $str[$i] = 'X';
        }
        elseif($str[$i] == '3'){
            $str[$i] = '6';
        }
        elseif($str[$i] == '4'){
            $str[$i] = 'V';
        }
        elseif($str[$i] == '5'){
            $str[$i] = 'U';
        }
        elseif($str[$i] == '6'){
            $str[$i] = '1';
        }
        elseif($str[$i] == '7'){
            $str[$i] = '3';
        }
        elseif($str[$i] == '8'){
            $str[$i] = '9';
        }
        elseif($str[$i] == '9'){
            $str[$i] = '7';
        }

    }
    return implode($str);;
}
?>