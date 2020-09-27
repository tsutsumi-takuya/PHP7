<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>
		<form method="POST" action="section8.php"> <!-- POSTをリクエストするフォーム作成 -->
			<ul>
				<li><label>単価：<input type="number" name="tanka"></label></li> <!-- テキストフィールドの作成 -->
				<li><label>個数：<input type="number" name="kosu"></label></li>
				<li><input type="submit" value="計算する。"></li> <!-- 送信ボタンの作成 -->
			</ul>
		</form>

		<form method="GET" action="section8.php"> <!-- GETメソッドでテキストフィールドの値を送る -->
			<ul>
				<li><label>番号：<input type="number" name="no"></label></li>
				<li><input type="submit" value="調べる。"></li> <!-- 送信ボタンの作成 -->
			</ul>
		</form>
	</div>
</body>
</html>