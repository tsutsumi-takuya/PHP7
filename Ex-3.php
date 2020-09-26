<?php
require_once("Practice-7.php"); // ファイルの読み込み
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
		<?php
		$player1 = new Soccer("シンジ"); // Soccerクラスのインスタンス作成
		$player1->who(); // 親クラス(Player)のメソッドを試す
		$player1->play(); // 子クラス(Soccer)のメソッドを試す
		?>

		<?php
		$player2 = new Soccer("つばさ"); // Soccerクラスのインスタンス作成 ※ マジックメソッドの__toString()で文字列にキャスト
		echo "{$player2}". PHP_EOL; // __toStringメソッドを試す
		$player2->play();
		?>
	</pre>

	<pre>
		<?php
		$runner1 = new Runner("福祉", 23); // Runnerクラスのインスタンス作成
		print_r($runner1); // インスタンスの確認
		$runner1->who(); // オーバーライドしたwho()の確認
		?>
	</pre>

	<pre>
		<?php
		$myMilk = new Milk(); // Milkクラスのインスタンス作成
		echo "作成日：", $myMilk->theDate. PHP_EOL;
		echo "期限日：", $myMilk->limitDate. PHP_EOL;
		?>
	</pre>
</body>
</html>