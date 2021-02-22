<?php
function isFirstLetterUpperCase($str){
    $regexp='/^[A-Z]/';
    if (preg_match($regexp,$str)){
        echo 'String first character is uppercase<br>';
    }else{
        echo 'string first character is not uppercase';
    }
}

isFirstLetterUpperCase('Hieu');
isFirstLetterUpperCase('hieu');