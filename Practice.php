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

<?php
$mag = "ハローグッバイ";
print($mag);
?>

<?php
$name = "佐藤";
$age = "29";
print $name. "さん". $age. "歳";
?>

<?php
$color = array("Red", "Green", "Blue"); // 配列の値の設定
$now = new DateTime(); // 現在時刻の表示
print_r($color); // print_r関数での出力
print_r($now);
?>

<?php
$msg = "佐藤さん";
$colors = array("Red", "Green", "Blue");
$now = new DateTime();
$tensuu = "45";
$isPass = ($tensuu > 80);
$name;

var_dump($msg);
var_dump($colors);
var_dump($now);
var_dump($tensuu);
var_dump($isPass);
var_dump($name);
?>

<?php
$a = 100;
$b = $a + 1;

var_dump($a);
var_dump($b);
?>

<?php  // 代入演算子
$a = $b = $c = 100;

var_dump($a);
var_dump($b);
var_dump($c);
?>

<?php // 複合代入演算子
$a = 0;
$a += 10;

var_dump($a);
?>

<?php // 算術演算子
$total = 80 + 40;
$result = $total - 5;

echo "合計{$total},最終結果{$result}"; // 変数を"{}"で囲むと表示を行える
?>

<?php
$total = 5450;
$amari = $total % 4;
$hitori = ($total - $amari) / 4;

echo "1人{$hitori}円、不足{$amari}円";
?>

<?php
$ans = 11.6 % 4.1;
echo $ans; // 小数点以下は切り捨て
?>

<?php
$ninzu = "3人" + "2人"; // 文字列でも指定可能（文字のジャグリングを行う) => ※ 警告文はコンソールに出る
$price = "500円" * $ninzu;
$price = $price * "1.08 消費税";
echo "料金は{$price}円、人数は{$ninzu}人";
?>
