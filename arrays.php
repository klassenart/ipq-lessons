<?php

error_reporting(-1);

function indent(){
    echo "<br><br><br>";
}

$marks = array();                   //Пустой массив
$weather = array(4, 12, -3, 8, -5, -6);     //Массив с данными

$weatherStrings = array('град', 'солнечно', 'дождь', 'снег');

$user = array(
    'name' => 'anonymous',          //Массив
    'email' => 'dobrokun@2ch.hk',   //с ключами
    'postCount' => 1303             //заданными вручную
);
$users = array(
    'user1' => array(
        'name' => 'abu',
        'email' => 'abu@2ch.hk'
    ),
    'user2' => array(
        'name' => 'vatrushechka',
        'email' => 'klassenmsg@gmail.com'
    )
);
/*                                  //Вывод массивов
var_dump($marks);
var_dump($weather);
var_dump($user);
var_dump($users);
*/
for ($i = 0; $i <= count($weather)-1; $i++){
    $j = $i+1;
    echo "Погода на {$j}-й день {$weather[$i]}, {$weatherStrings[mt_rand(0,count($weatherStrings)-1)]}.<br>";
}
indent();
//------------------------------------------------------------------------------------------------------//
//Задача 1
$rates = array(3, 5, 3, 2, 1, 8, 4, 3, 4, 3, 2, 3); //Оценки, которые поставили анону

echo "Анону поставили ", count($rates), " оценок, их сумма = ", array_sum($rates),
     ", а средний бал - ", round(array_sum($rates)/count($rates), 1), ".<br><br>";

indent();
//------------------------------------------------------------------------------------------------------//
//Задача 2

$anonHeight = 181; //рост анона
$classMatesHeight = array(  // массив с ростом всех классмейтов
    'Антон'	=>	172,
    'Семен'	=>	165,
    'Лена'	=>	189,
    'Иван'	=>	171,
    'Петр'	=>	182,
    'Сидор'	=>	176,
    'Аня'	=>	180,
    'Таня'	=>	179,
    'Маня'	=>	171
);

$numberOfClassMatesThatBiggerThanAnon = 0; //людей выше анона

echo "Рост анона: {$anonHeight}<br><br>";

foreach ($classMatesHeight as $name => $height) {
    echo "Имя: {$name}, рост: {$height} см. <br>";
    if ($height > $anonHeight){
        $numberOfClassMatesThatBiggerThanAnon++;
        echo "{$name} выше анона.<br>";
    } else {
        echo "{$name} не выше анона<br>";
    }
    echo "<br>";
}

echo "В классе {$numberOfClassMatesThatBiggerThanAnon} человек выше анона<br><br><br>";


//------------------------------------------------------------------------------------------------------//
//Задача 3

$answers = array('да', 'нет', 'не знаю', 'никогда', 'зависит от тебя', 'спроси анона');
$question = "Выучу ли я пхп?";
echo "Вопрос: ", $question, "<br>";
echo "Ответ: {$answers[mt_rand(0, 5)]} <br>";
indent();

//------------------------------------------------------------------------------------------------------//
//Задача 4

$nameLetters = array('ко', 'и', 'дзу', 'ми', 'са', 'ку', 'ра', 'да', 'чи', 'а', 'ки', 'ми', 'на', 'го', 'ха', 'ру', 'хи', 'ча', 'но', 'н',
'дзи', 'ма', 'до', 'ре', 'фа', 'соль', 'си', 'диез'); //да, я аутист.

$generatedName = '';

for ($i = 0; $i < mt_rand(4, count($nameLetters)); $i++){
    $generatedName = $generatedName . $nameLetters[mt_rand(0, count($nameLetters))];
}
echo "Сгенерированное имя: $generatedName";
indent();













?>