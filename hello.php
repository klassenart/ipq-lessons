<?php

error_reporting(-1);

function say($string){ //тут я аутировал и пытался пофиксить \n, но забил, чому-то не работает. Может подрубить что-то надо?
    echo nl2br($string);
}

say("Hello out there!\n");
say((20 + 30) * 5 / 2);
$daysPassed = 7;
say("Прошло $daysPassed дней\n\n");

$dollars = 200; //число далларов
$exchangeRate = 71.2809181; //курс даллара
$roubles = $dollars * $exchangeRate; //даллары в рублях

say("$dollars можно обменять на $roubles рублей\n");

say("Бросаем кубик...\n");
$random = mt_rand(1, 6);
say("Выпало $random\n");


?>