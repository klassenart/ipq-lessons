<?php

error_reporting(-1);

function countCredit($price, $percent, $commision, $openAccountPayment, $payment){

    if ($payment == null){
        $payment = 5000;
    }


    $totalPayment = 0;

    $price += $openAccountPayment;
    $percent = ($percent/100) + 1; //хуй знает зачем я это сделал, но вроде удобно.

    if(($price*$percent+$commision) - $price >= $payment){ //проверка на возможность выпалитить кредит
        return "Вам нужно платить больше чтобы покрыть этот кредит.";
    }

    while ($price > 0){

        if(($price * $percent) + $commision > $payment){
            $price = ($price * $percent) + $commision;
            $price -= $payment;
            $totalPayment += $payment;
        } else {
            $price = ($price * $percent) + $commision;
            $totalPayment += $price;
            $price -= $price;
        }

    }

    return $totalPayment;

}

echo "HomoCreditBank: ", countCredit(39999, 4, 500), "<br>";
echo "SoftBank: ", countCredit(39999, 3, 1000), "<br>";
echo "StrawberryBank: ", countCredit(39999, 2, 0, 7777), "<br>";
echo "NaebalovoBank: ", countCredit(100000, 50, 5000, 18000, 100), "<br>";

