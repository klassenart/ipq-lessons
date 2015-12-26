<?php

error_reporting(-1);


echo "Игра в кубики<br><br>";

$userRandom = array(mt_rand(1, 6), mt_rand(1,6));
$computerRandom = array(mt_rand(1, 6), mt_rand(1,6));

echo "Вам выпало $userRandom[0] и $userRandom[1], вашему противнику $computerRandom[0] и $computerRandom[1]<br><br>";
if (array_sum($userRandom) > array_sum($computerRandom)){
    echo "Поздравляем, вы выиграли<br>";
} elseif (array_sum($userRandom) < array_sum($computerRandom)){
    echo "Вы проиграли :c<br>";
} else {
    echo "Победила дружба :3<br>";
}
?>