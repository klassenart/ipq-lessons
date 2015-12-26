<?php

error_reporting(-1);

//Коды для замены букв.

$code = array(
    'й' => '/',
    'ц' => '.',
    'у' => '9',
    'к' => 'm',
    'е' => 'n',
    'н' => 'b',
    'г' => 'v',
    'ш' => 'c',
    'щ' => 'x',
    'з' => 'z',
    'х' => '\\',
    'ъ' => '\'',
    'ф' => 'l',
    'ы' => 'k',
    'в' => 'j',
    'а' => 'h',
    'п' => 'g',
    'р' => 'f',
    'о' => 'd',
    'л' => 's',
    'д' => 'a',
    'ж' => ']',
    'э' => '[',
    'я' => 'p',
    'ч' => 'o',
    'с' => 'i',
    'м' => 'u',
    'и' => 'y',
    'т' => 't',
    'ь' => 'r',
    'б' => 'e',
    'ю' => 'w',
    '.' => 'q',
    ',' => '4'
);

$decode = array_flip($code);

$originalText = 'оп, ты хороший человек.';
$cipher = strtr(mb_strtolower($originalText), $code);
$decodedCipher = strtr($cipher, $decode);
echo "Оригинал: $originalText<br>
      Шифровка: $cipher<br>
      Дешифровка: $decodedCipher<br>";

