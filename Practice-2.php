<?php
$tokuten = 85;
if ($tokuten>=80) {
	echo "最高！ ";
}
echo "{$tokuten}でした！";
?>

<?php
$tokuten = 79;
if ($tokuten>=80) {
	echo "最高！　";
}
echo "{$tokuten}でした。";
?>

<?php
$tokuten = 50;
if ($tokuten>=80) {
	echo "素晴らしい！ ";
} else {
	echo "もう少し！";
}
echo "{$tokuten}でした！";
?>

<?php
$age = 18;
if ($age<13) {
	$price = 0;
} elseif ($age<=15) {
	$price = 500;
} elseif ($age<=19) {
	$price = 1000;
} else {
	$price = 2000;
}
echo "{$age}歳は{$price}円です。";
?>

<?php // if文のネスト
$math = 90;
$eng = 70;
if ($math>=60) {			// Mathが60点以上の場合、ネストのifに進む
	if ($eng>=60) {			// Mathが60点以上で、Engも60点以上の場合
		echo "合格です。";
	} else {				// Mathが60点以上で、Engが60点以下の場合
		echo "不合格です。";
	}
} else {
	echo "不合格です。";		// Mathが60点以下での場合
}
?>

<?php
$math = 59;
$eng = 80;
if (($math>=60)&&($eng>=60)) {	// どちらも60点以上であった場合
	echo "合格です。";
} else {
	echo "不合格です。";
}
?>

<?php
$math = 59;
$eng = 80;
if (($math>=60)||($eng>=60)) {	// どちらかが60点以上であった場合
	echo "合格です。";
} else {
	echo "不合格です。";
}
?>

<?php
$sex = "woman";
$age = 42;
if ($sex == "woman") {			// 性別のtrue
	if (($age>=30)&&($age<40)){	// 年齢のtrue
		echo "採用致します。";
	} else {					// 年齢条件のfalse
		echo "適正年齢を超えています。";
	}
} else {
	echo "女性のみの募集です。";	// 性別のfalse
}
?>

<?php
$color = "red";
switch ($color) {
	case "green":	// 値がGreenの場合、$priceは120円
		$price = 120;
		break;
	case "red":		// 値がRedの場合、$priceは140円
		$price = 140;
		break;
	case "blue":	// 値がBlueの場合、$priceは160円
		$price = 160;
		break;
	default:		// 値がそれ以外の場合、$priceは100円
		$price = 100;
		break;
}
echo "{$color}は{$price}円です。";
?>

<?php
$color = "yellow";
$price = 100;
switch ($color) { // switchに条件指定がない場合の処理
	case "red":
		$price = 120;
		break;
	case "blue":
		$price = 160;
		break;
}
echo "{$color}は{$price}円です。";
?>

<?php
$color = "green";
switch ($color) {
	case "green":	// 値がGreenとRedの場合
	case "red":		// Breakさせずに条件を増やす(GreenもRedも同じ値段)
		$price = 140;
		break;
	case "blue":
		$price = 160;
		break;
	default:
		$price = 100;
		break;
}
echo "{$color}は{$price}円です。";
?>

<?php
$numArray = array();
while (count($numArray)<5) {	// 配列$numArrayが5になるまでの繰り返し
	$num = mt_rand(1,30);		// 変数$numにランダムで1〜30の値を代入
	if (!in_array($num, $numArray)) {
		array_push($numArray, $num);
	}
}
print_r($numArray);
?>

<?php
do {
	$a = mt_rand(1,13);
	$b = mt_rand(1,13);
	$c = mt_rand(1,13);
	$abc = $a + $b + $c;

	if ($abc == 21) { // ループを抜ける合計値の設定
		break;
	}
} while (TRUE); // 無限ループ
echo "合計値が21になる3個の数字、{$a},{$b},{$c}";
?>

<?php
for ($i=0; $i < 10; $i++) { // 10までのカウントアップ
	echo "{$i}回。";
}
?>

<?php
for ($i=10; $i > 0; $i--) { // 10からのカウントダウン
	echo "{$i}回。";
}
?>

<?php
$price = 0;
for ($kazu=1; $kazu <= 6; $kazu++) { // $kazuが6になるまでループ
	if ($kazu<=3) {	// 3人までは1000円
		$price += 1000;
	} else { // それ以外は500円
		$price += 500;
	}
	echo "{$kazu}人、{$price}円。";
}
?>

<?php
for ($i=0; $i <=3 ; $i++) { // $iが3までのfor文
	for ($j=0; $j <=5 ; $j++) { // for文のネストで新たに$jの5目での指定を行う
		echo "{$i}-{$j}". "|";
	}
	echo PHP_EOL;
}
?>

<?php
$list = array(20, 32, 50, -5, 40);
$count = count($list);
$sum = 0;
for ($i=0; $i < $count; $i++) {
	$value = $list[$i];
	if ($value<0) {
		$sum = "マイナスの値{$value}が検出されたので中断致しました。";
		break; // 配列からマイナスの値が検出された場合はBreakで処理を中断する
	} else {
		$sum += $value;
	}
}
echo "合計：$sum". PHP_EOL;
?>

<?php
$list = array(20, -32, 50, -5, 40);
$count = count($list);
$sum = 0;
for ($i=0; $i < $count; $i++) {
	$value = $list[$i];
	if ($value<0) {
		continue; // マイナスの値を無視してプラスの値だけ計算処理する
	}
	$sum += $value; // 鰓裂内のプラスの値のみ足して表示する
}
echo "合計：$sum". PHP_EOL;
?>

