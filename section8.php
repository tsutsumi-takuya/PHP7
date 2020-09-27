<?php
$tanka = $_POST["tanka"];	// POSTされた値の取り出し
$kosu = $_POST["kosu"];		// POSTされた値の取り出し
$price = $tanka * $kosu;
$tanka = number_format($tanka);
$price = number_format($price);
echo "単価{$tanka}円 × {$kosu}個は{$price}円です。". PHP_EOL;
?>

<?php
$no = $_GET["no"]; // GETリクエストのパラメータ取得
$nolist = [3, 5, 7, 8, 9]; // 値の検索
if (in_array($no, $nolist)) {
	echo "{$no}はありました！！". PHP_EOL;
} else {
	echo "{$no}はありませんでした。". PHP_EOL;
}
?>