<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<div>
		<?php
		$data = "東京";
		$data = rawurlencode($data); // URLエンコードする
		$url = "Practice-8(checkData).php";
		echo "<a href={$url}?data={$data}>", "送信する。"; // クエリ文字列の作成
		?>
	</div>
</body>
</html>