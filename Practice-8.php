<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>
		<form method="POST" action="calc.php"> <!-- POSTをリクエストするフォーム作成 -->
			<ul>
				<li><label>単価：<input type="number" name="tanka"></label></li> <!-- テキストフィールドの作成 -->
				<li><label>個数：<input type="number" name="kosu"></label></li>
				<li><input type="submit" value="計算する。"></li> <!-- 送信ボタンの作成 -->
			</ul>
		</form>

		<?php
		$tanka = $_POST["tanka"];
		$kosu = $_POST["kosu"];
		$price = $tanka * $kosu;
		$tanka = number_format($tanak);
		$price = number_format($price);
		echo "単価{$tanka}円 × {$kosu}個は{$price}円です。". PHP_EOL;
		?>
	</div>
</body>
</html>