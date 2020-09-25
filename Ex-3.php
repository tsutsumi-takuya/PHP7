<?php
require_once("Practice-7.php"); // Staffクラスファイルの読み込み
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ex-3</title>
</head>
<body>
	<pre>
		<?php
		Staff::deposit(100); // 他のクラスから利用 => クラス名::クラスメンバー
		Staff::deposit(150);
		echo Staff::$piggyBank, "円になりました。". PHP_EOL; // Staffクラスのクラスプロパティ($piggybank)の値

		$hana = new Staff("花", 21); // Staffクラスのインスタンスの作成
		$hana->latePenalty(); // 遅刻して罰金 => 1000円追加
		echo Staff::$piggyBank, "円になりました。". PHP_EOL; // クラスプロパティ($piggybank)の確認

		$taro = new Staff("太郎", 34);
		$taro->latePenalty();
		echo Staff::$piggyBank, "円になりました。". PHP_EOL;

		// $hana->name = "花"; プロパティの値を設定
		// $hana->age = 21;
		// $taro->name = "太郎"; インスタンス->プロパティ名
		// $taro->age = 35;

		// print_r($hana); インスタンスの確認
		// print_r($taro);

		// $hana->hello(); メソッド実行
		// $taro->hello(); インスタンス->メソッド()
		?>
	</pre>

	<pre>
		
	</pre>
</body>
</html>