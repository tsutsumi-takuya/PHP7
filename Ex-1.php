<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Chapter-2</title>
</head>

<?php
$year1 = "1969年";
$year2 = "2020年";
$age = 25;
?>

<?php
function prise_2($str) {
	$kakaku = 3000;
	$length = mb_strlen($str); // 文字数を調べる
	if ($length>10) {
		$kakaku += ($length - 10)*100;
	}
	$kakaku = number_format($kakaku);
	$result = "{$length}文字、{$kakaku}円";
	return $result;
}
?>

<?php
$msg = "東京 <_> 京都　'Eat & Run' ツアー";
?>

<body>
	<div class="main">
			前回のオリンピックは
		<h1>
			<?php echo $year1; ?>
		</h1>
		です。
			今回のオリンピックは
		<h1>
			<?php echo $year2; ?>
		</h1>
		です。
	</div>

	<?php if ($age<=15):?>
		15歳以下の方は料金は500円です。</br>
	<?php elseif ($age<=19):?>
		16歳から19歳の方は料金は1000円です。</br>
	<?php else:?>
		20歳以上の方は料金は2000円です。</br>
	<?php endif;?>

	<?php
	$kingaku1 = prise(2400, 2);
	echo "金額は{$kingaku1}です。". PHP_EOL;
	?>

	<?php
	$kingaku2 = prise(1200, 5);
	echo "金額は{$kingaku2}です。". PHP_EOL;
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
	?>

	<?php
	$msg1 = "Hello:world!";
	$msg2 = "ハローワールド";
	echo prise_2($msg1);
	echo PHP_EOL;
	echo prise_2($msg2);
	?>

	<?php
	echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8'); // エンティティに変換して出力
	?>

</body>
</html>