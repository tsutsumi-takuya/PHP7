<?php
for ($i=1; $i <=10 ; $i++) {
	$num = mt_rand(1,100); // 引数(パラメータ)の指定を行う
	echo "{$num},";
}
?>

<?php
$kyori = 20;
$kakudo = 32 * pi()/180;
$takasa = $kyori * tan($kakudo);
$takasa = round($takasa*10)/10;
echo "旗の高さは{$takasa}mです。";
?>

<?php // ユーザ定義関数
function double($i) {
	$result = $i * 2;
	return $result;
}

$ans = double(125); // ユーザ定義関数の呼び出しと代入
echo $ans;
?>

<?php
function prise($tanka, $kosu) { // prise関数の条件定義
	$souryou = 250;
	$ryoukin = $tanka * $kosu;
	if ($ryoukin<5000) {
		$ryoukin += $souryou;
	}
	return $ryoukin;
}

$sum1 = prise(2400, 2); // prise関数の引数に値を指定
$sum2 = prise(1200, 5);
echo "金額は{$sum1}です。". PHP_EOL;
echo "金額は{$sum2}です。";
?>

<?php
function warikan($total, $ninzu) { // warikan関数の定義
	if ($ninzu <= 0) { // 人数が0以下の場合、returnで処理の中断
		return;
	}
	$result = $total/$ninzu;
	echo "{$total}円を{$ninzu}人で割り勘すると{$result}円です。". PHP_EOL;
}

warikan(2500, 2);
warikan(3000, 0); // 人数が0で関数が中断されているので、結果は出ない
warikan(5500, 4);
?>

<?php
function charge($rank, $days=1) { // Charge関数の定義
	switch ($rank) { // Switch文で条件分岐
		case "A":
			$ryoukin = 15000 * $days;
			break;
		case "B":
			$ryoukin = 12000 * $days;
			break;
		default:
			$ryoukin = 8000 * $days;
			break;
	}
	return $ryoukin;
}

$kingaku1 = charge("B", 2); // Charge関数の引数に値を設定
$kingaku2 = charge("A");	// 第2引数の指定がない場合、$days=1の金額が自動入力される

echo "金額は{$kingaku1}円です。". PHP_EOL;
echo "金額は{$kingaku2}円です。". PHP_EOL;
?>

<?php
function team($name, ...$member) { // ...$membersにすると第2引数は配列になる
	print_r($name . PHP_EOL);
	print_r($member);
}

team("Peach", "佐藤", "田中", "加藤");
?>

<?php
function team_2($name, ...$members) { // team_2関数の定義
	$list = implode("、", $members);  // implode() => 配列要素を文字列により連結する
	return "{$name}：{$list}";
}

$team1 = team_2("Peach", "佐藤", "田中", "加藤"). PHP_EOL; // team_2関数に値を渡す
$team2 = team_2("Apple", "銀次郎", "清美", "順太郎");

echo $team1;
echo $team2;
?>

<?php
function twice(int $var) { // twice関数の定義と、引数の型指定を行う(今回はint型)
	$var *= 2;
	return $var;
}

$num = 10.8;
$result = twice($num);
echo "{$num}の2倍の値は{$result}です。";
?>

<?php
function twice_2(float $var):int { // 引数をfloat型で受け取り、処理後はint型で返す => float型は小数点
	$var *= 2;
	return $var;
}

$num = 10.8;
$result = twice_2($num);
echo "{$num}の2倍の値は{$result}です。";
?>

<?php
$tax = 0.08;

function taxPrice($tanka, $kosu) { // taxPrise関数の定義
	global $tax; // $taxをglobal変数として定義
	echo $tax. PHP_EOL;
	$ryoukin = $tanka * $kosu *(1+$tax);
	echo "{$ryoukin}円です。";
}

taxPrice(250, 4);
echo "税込". $tax*100 , "%";
?>

<?php
function countup() {
	static $count = 0;
	$count += 1;
	return $count;
}

for ($i=1; $i <= 10; $i++) {
	$num = countup();
	echo "{$num}回目";
}
?>

<?php
function oneUp($var) { // 値渡し
	$var += 1;
}

$num = 5;
oneUp($num);
echo $num;
?>

<?php
function oneUp_2(&$var) { // 参照渡し
	$var += 1;
}

$num = 5;
oneUp_2($num);
echo $num;
?>

<?php
function myFunc() {
	$allArgs = func_get_args();		// 関数に渡された引数を配列で返す　=> func_get_args()
	$total = array_sum($allArgs); 	// 引数の値を合計する => array_sum()
	$numArgs = func_num_args();		// 引数の個数を返す => func_num_args()

	if ($numArgs>0) {
		$average = $total / $numArgs;
		$lastValue = func_get_arg($numArgs-1); // 指定した引数の値を返す
	} else {
		$lastValue = $average = $total = "（データなし）";
	}
	echo "合計点 ", $total. PHP_EOL;
	echo "平均点 ", $average. PHP_EOL;
	echo "最後の点数 ", $lastValue;
}

myFunc(43, 67, 55, 75);
?>

<?php // 可変変数
$color = "Red";
$$color = 125;
echo $Red;
?>

<?php
$unitPrice = 230;
$quantity = 5;
$tanka = "unitPrice"; // 変数に変数名を代入し、ストリングする
$kosu = "quantity";
$ryoukin = $$tanka * $$kosu; // 可変変数を使用
echo "{$ryoukin}円です。";
?>

<?php
function hello($who) {
	echo "{$who}さん、こんにちは！";
}

function bye($who) {
	echo "{$who}さん、さようなら！";
}

$msg = "hello"; // 実行する関数の指定
if (function_exists($msg)) { // 指定した関数が存在するか確認
	$msg("金太郎"); // 関数に引数を渡す
}
?>

<?php // 無名関数（ラムダ関数）
$myFunc = function($who) { // $myfuncに無名関数の代入
	echo "{$who}さん、こんにちは！";
};// 代入文なので";"が必要

$myFunc("田中"); // 関数に引数を渡す
?>

<?php
$msg = "ありがとう！";
$myFunc = function($who) use($msg){ // 無名関数で使用する変数の値を設定
	echo "{$who}さん、". $msg;
};

$myFunc("田中"); // 関数に引数を渡す
?>

