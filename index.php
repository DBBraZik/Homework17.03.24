<?php
$usd_to_rub = 81.2;
$rub_to_cny = 0.07;
$usd_amount = 500;
$rub_amount = $usd_amount * $usd_to_rub;
$cny_amount = $rub_amount * $rub_to_cny;
echo "Сумма $usd_amount USD равна примерно " . number_format($rub_amount, 2) . " RUB или около " . number_format($cny_amount, 2) . " CNY.";
?>