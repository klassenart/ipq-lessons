<?php

error_reporting(-1);

mb_internal_encoding('utf-8');

/*
$bigText = <<<EOF
Всем привет
и
Всем пока

Перенос строк чому-то тут не работает тоже :c

EOF
;

echo $bigText;
echo mb_strlen($bigText);
*/


$textPalindrome = "А роза упала на лапу Азора";
$textNonPalindrome = "Я совсем не палиндром";


function isPalindrome($string){
    $string = str_replace(" ","",mb_strtolower($string));
/*    $ebuchka = 1; ты была хорошим другом, ебучка.
*/
    for ($i = 0; $i <= floor(mb_strlen($string)/2); $i++){
        if (mb_substr($string, $i-1, 1) != mb_substr($string, -$i, 1)){
            return false;
            break;
        }
    }
    return true;
}

echo isPalindrome($textNonPalindrome);
echo "<br>";
echo isPalindrome($textPalindrome);
echo "<br>";