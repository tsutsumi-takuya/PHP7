<?php
echo 'こんにちは';
?>

<?php
$who = 'php 7';
echo "こんにちは、", $who;
?>

<?php
echo "みなさん, ";
echo "こんにちは";
echo PHP_EOL;
echo "みなさん, "; echo "こんばんは";
?>

<?php
echo "こんにちは、";
ECHO "こんばんは";
?>

<?php
$mycolor = "red";
$MYCOLOR = "RED";

echo $mycolor;
echo "、";
echo $MYCOLOR;
?>

<?php
$size = "M";
$price = "¥1200";

echo $size, ",";
echo $price, "です";
?>

<?php
$Math = "65";
$English = "70";
$Science = "85";
$total = $Math + $English + $Science;

$heikin = $total / 3 ;

echo "数学の点数は", $Math, "です。";
echo PHP_EOL;
echo "英語の点数は", $English, "です。";
echo PHP_EOL;
echo "科学の点数は", $Science, "です。";
echo PHP_EOL;
echo "三教科の平均点数は", $heikin, "です。";
?>

<?php
$zaiko = "在庫なし";
echo $zaiko;
echo PHP_EOL;
$zaiko = 5;
echo $zaiko;
echo PHP_EOL;

const tax = 1.08;
$prise = 1250;
$total = $prise * tax;
echo $total;
echo PHP_EOL;

// <br> => htmlでの表記はされないが、コンソール上では表示されたしまう
// echo PHP_EOL; => htmlとコンソール上のどちらでも表示されない

?>
