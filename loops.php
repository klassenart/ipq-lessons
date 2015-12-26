<?php

$myName = 'я';

for ($i = 1; $i<=10; $i++){
    echo "{$i}-й раз говорю что {$myName} аутист :3<br>";
}

echo "<br>";

$creditSum = 40000; //сумма кредита
$bankPercent = 1.03; //ежемесечный процент
$bankCommision = 1000; //комиссия банка за обслуживание счета
$everyMonthPayment = 5000; //сумма которую платит каждый месяц наш школьник
$totalPayment = 0; //сколько отдал школьник
$month = 1;

while($creditSum > 0){
    if(($creditSum * $bankPercent) + $bankCommision > $everyMonthPayment){
        $creditSum = ($creditSum * $bankPercent) + $bankCommision;
        $creditSum -= $everyMonthPayment;
        $totalPayment += $everyMonthPayment;

        echo "{$month} месяц спустя: долг = {$creditSum} руб., выплачено всего {$totalPayment} руб.<br>";
        $month++;


    } else {
        $creditSum = ($creditSum * $bankPercent) + $bankCommision;
        $totalPayment += $creditSum;
        $creditSum -= $creditSum;
        echo "{$month} месяц спустя: долг = {$creditSum} руб., выплачено всего {$totalPayment} руб.<br>
        Кредит полностью выплачен за {$month} месяцев<br>";
    }
}

?>