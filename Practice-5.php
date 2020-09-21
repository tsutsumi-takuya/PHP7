<?php
$theSize = "M";
$thePrice = 1200;
$msg = "$theSize サイズ, $thePrice 円";
echo $msg;
?>

<?php
$theSize = "M";
$thePrice = 1200;
$msg = "{$theSize}サイズ, {$thePrice}円";
echo $msg;
?>

<?php
$yen = 117;
echo "本日のレートは,\$1 = $yen 円です。"; // opyion+¥ => \
?>

<?php
$theSize = "M";
$thePrice = 1200;
$msg = '$theSize サイズ, $thePrice 円';
echo $msg;
?>

<?php
$msg = 'そこはY\'s Roomです。';
echo $msg;
?>

<?php
$msg = 'そこは"Y\'s Room"です。';
echo $msg;
?>

<?php // ヒアドキュメント構文
$version = 7;
$msg = <<< "EOD"
これから一緒に"PHP $version"を学びましょう。
本気出すよ？？
EOD;
echo $msg; // ヒアドキュメントの表示
?>

<?php // Nowdoc構文
$version = 7;
$msg = <<< 'EOD'
これから一緒に"PHP $version"を学びましょう。
本気出すよ？？
EOD;
echo $msg; // 変数が展開されてしまう
?>

<?php // printf('フォーマット文字列', 値)
echo M_PI;
echo PHP_EOL;
printf('%.3f', M_PI); // 小数点第3位は四捨五入される
echo PHP_EOL;
printf('円周率は %.2f です', M_PI); // 置換する個数が１個の場合
?>

<?php
$a = 15.69;
$b = 11.32;
printf('最大値 %.1f, 最小値 %.1f', $a, $b); // 置換する個数が2個の場合
?>

<?php // 上記と同じ内容で変数を使用
$format = '最大値 %.1f, 最小値 %.1f';
$a = 15.69;
$b = 11.32;
printf($format, $a, $b);
?>

<?php // 符号指定子
$a = -5;
$b = 9;
printf('%+d', $a); // '%+d' => 整数値であることを示す型指定子
echo " , ";
printf('%+d', $b);
?>

<?php // パディング指定子
$a = 7;
$b = 2380;
printf('番号は%03dです。', $a); // 表示が3桁になるように前に0を付ける
echo PHP_EOL;
printf("請求金額は%'*6d円", $b); // 表示が6桁になるように前に*を付ける
?>

<?php
$year = 1989;
$month = 3;
$day = 9;
printf('%04d - %02d - %02d', $year, $month, $day); // ４桁指定(04d) 2桁指定(02d) 2桁指定(02d)
?>

<?php // アライメント指定子
$a = "23ab";
printf("IDは%'#-8sです。", $a); // 8桁指定で左寄せ(-8s) ※ sは値が文字列であることを示す型指定子
printf("IDは%'*+8sです。", $a); // 8桁指定で右寄せ(+8s) ※ sは値が文字列であることを示す型指定子
?>

<?php // 幅指定子
$a = 83;
$b = 92018;
$c = "3-A";
printf('番号は%04dです。', $a); // $aが４桁に満たない時、0を追加
printf('番号は%04dです。', $b); // $bは５桁なのでそのまま表示
printf('IDは%04sです。', $c); // $cは文字列で３桁なので、0が１つ追加
?>

<?php // 精度定子
$a = 10.2582;
$b = 3.1;
$c = "Hypertext Preprocessor!!";
printf('結果は%.2fです。', $a); // ピリオドに続いて桁数の指定を行う => 小数点２桁まで四捨五入
printf('結果は%.02fです。', $b); // ピリオドに続いて桁数の指定を行う => 桁数が足りないので0を付けて表示
printf('PHPは%.5s ...', $c); // ピリオドに続いて桁数の指定を行う => 文字列の先頭から５文字で切り捨て
?>

<?php // 型指定子 => %の例
$per = 64.8;
printf('達成率は%.2f%%です。', $per); // %の表示をさせたい為、%%とする
?>

<?php // 文字列を変数に入れて扱う
$year = 2016;
$seq = 539;
$type = "P7";
$id = sprintf('%04d%06d - %s', $year, $seq, $type); // sprintfで作成した文字列を$idへ代入
echo $id;
?>

<?php // フォーマットした文字列を返す
$max = 15.89;
$min = 11.32;
$ave = 13.218;
$data = array($max, $min, $ave); // 変数を配列にする
$format = '最大値は%.1f 最小値は%.1f 平均値は%.1f'; // 配列に値を当てはめる
vprintf($format, $data); // vprintf() => 配列に入っている値をフォーマットして出力
?>

<?php // 数値の３桁区切りフォーマット
$price = 1980 * 2;
$kingaku = number_format($price); // 指定しなければnumber_formatは３桁で区切る
echo $kingaku, "円";
?>

<?php
$num = 253.365;
$length = number_format($num, 2); // 第２引数で小数点以下の指定を行える
echo $length, "m";
?>

<?php
$msg = "吾輩は猫である、名前は未だない。";
echo mb_strlen($msg). PHP_EOL;			// mb_strlen() => 文字数のカウント
echo mb_substr($msg, 4). PHP_EOL;		// mb_substr(文字列、文字位置、文字数) => 5文字目から最後まで
echo mb_substr($msg, 4, 10). PHP_EOL;	// mb_substr(文字列、文字位置、文字数) => 5文字目から10文字目まで
echo mb_substr($msg, -6);				// mb_substr(文字列、文字位置、文字数) => 最後から6文字
?>

<?php
$msg = "春はあけぼの。";
$msg = mb_substr($msg, 0, -1); // mb_substr(文字列、文字位置、文字数) => 先頭から最後の文字を削除
echo $msg;
?>

<?php // 半角英数字のみならmb_は削除出来る
$id = "ABC1X239JP";
echo substr($id, 4). PHP_EOL;		// substr(文字列、文字位置、文字数) => 5文字目から最後まで
echo substr($id, 5, 3). PHP_EOL;	// substr(文字列、文字位置、文字数) => 6文字目から3文字
echo substr($id, -2). PHP_EOL;		// substr(文字列、文字位置、文字数) => 最後から2文字
?>

<?php
$id = "Pease";
$length = strlen($id);
for ($i=0; $i < $length; $i++) {
	$chr = $id{$i}; // 文字列から1文字ずつ取り出す
	echo "{$i} - ", $chr. PHP_EOL;
}
?>

<?php // 文字変換をする　mb_convert_kana()
$msg = "Hello PHP を始めよう！！";
echo mb_convert_kana($msg, "as"); // as => 英数記号文字を半角にする(a)、スペースを半角にする(s)の組み合わせ
?>

<?php
$msg = "Hello PHPを始めよう！！";
echo mb_convert_kana($msg, "AS"); // AS => 半角英数記号を全角英数記号に変換(A),半角スペースを全角スペースに変換(S)の組み合わせ
?>

<?php
$yomi = "ふじのさぶろう";
$hankaku_katakana = mb_convert_kana($yomi, "h"); // h => ひらがなを半角カタカナに変換
$zenkaku_katakana = mb_convert_kana($yomi, "C"); // C => ひらがなを全角カタカナに変換
echo $hankaku_katakana. PHP_EOL;
echo $zenkaku_katakana;
?>

<?php
$yomi1 = "ｽｺｯﾄ・ﾗﾌｧﾛ";
$yomi2 = "チャーリー・ミシガン";
$hiragana1 = mb_convert_kana($yomi1, "HcV"); // H => 半角カタカナをひらがなに変換
$hiragana2 = mb_convert_kana($yomi2, "HcV"); // c => 全角カタカナをひらがなに変換, V => 濁点付きの文字を1文字に変換
echo $hiragana1. PHP_EOL;
echo $hiragana2;
?>

<?php
$yomi1 = "ﾌｼﾞﾔﾏｻｸﾗ";
$yomi2 = "あしがらきんたろう";
$hiragana1 = mb_convert_kana($yomi1, "KCV"); // K => 半角カタカナを全角カタカナに変換
$hiragana2 = mb_convert_kana($yomi2, "KCV"); // C => ひらがなを全角カタカナに変換, V => 濁点付きの文字を1文字に変換
echo $hiragana1. PHP_EOL;
echo $hiragana2;
?>

<?php // 英文字の大文字変換　strtoupper()
$msg = "Apple iPhone";
echo strtoupper($msg);
?>

<?php // 英文字の小文字変換　strtolower()
$msg = "Apple iPhone";
echo strtolower($msg);
?>

<?php // 先頭の文字ののみ大文字に変換 ucwords()
$msg = "THE QUICK BROWN FOX";
echo ucwords(strtolower($msg)); // strlowerで全て小文字に変換後,ucwordsで先頭の文字のみ大文字に変換する
?>

<?php // 不要な文字の削除　trim()
$msg = "\tHello World!!";
$result = trim($msg);
echo "処理前:". PHP_EOL;
echo "[", $msg, "]".PHP_EOL;
echo "処理後:". PHP_EOL;
echo "[", $result, "]";
?>

<?php // 前後にある不要な空白と改行の削除
$msg = "  東京都千代田区".PHP_EOL;
$result = trim($msg, "\x20\t\n\r\0\v ");
echo "処理前:". PHP_EOL;
echo "[", $msg, "]".PHP_EOL;
echo "処理後:". PHP_EOL;
echo "[", $result, "]";
?>

<?php // 文字列からHTMLのタグを取り除く strip_tags()
$msg = "<p><b> 北原白秋「砂山」</b> 海は荒海 <br> 向こうは佐渡よ <br></p>";
echo strip_tags($msg);
?>

<?php // 文字列をURLエンコードする rawurlencode()
$page = "PHPサンプル.html";
$path = rawurlencode($page);
$url = "http://sample.com/{$path}";
echo $url;
?>

<?php // URLデコードする　rawurldecode()
$encode = "PHP%207%E3%82%B5%E3%83%B3%E3%83%97%E3%83%AB.html";
$decode = rawurldecode($encode);
echo $decode;
?>

<?php // 文字列と文字列の比較
function holiday($youbi) {
	if (($youbi == "土曜日") || ($youbi == "日曜日")) {
		echo $youbi, "はお休みです。".PHP_EOL;
	} else {
		echo $youbi, "はお仕事です。".PHP_EOL;
	}
}
holiday("金曜日");
holiday("土曜日");
holiday("日曜日");
?>

<?php // 文字列と数値の比較
function check($a, $b) {
	if ($a == $b) { // == での比較なので精度が低い
		echo "{$a}と{$b}は同じ".PHP_EOL;
	} else {
		echo "{$a}と{$b}は違う".PHP_EOL;
	}
}
check("7cm", "7cm");
check("7km", "7cm");
check("7人", 7);
check("PHP7", 7);
check("七", 0);
?>

<?php
function check_2($a, $b) {
	if ($a === $b) { // === での比較なので精度が高い
		echo "{$a}と{$b}は同じ".PHP_EOL;
	} else {
		echo "{$a}と{$b}は違う".PHP_EOL;
	}
}
check_2("7cm", "7cm");
check_2("7km", "7cm");
check_2("7人", 7);
check_2("PHP7", 7);
check_2("七", 0);
?>

<?php // アルファベット順での比較
function compare($a, $b) {
	if ($a < $b) {
		echo "{$a}、{$b}の順番".PHP_EOL;
	} else if ($a == $b) {
		echo "{$a}、{$b}は同じ".PHP_EOL;
	} else if ($a > $b) {
		echo "{$b}、{$a}の順番".PHP_EOL;
	}
}
compare("apple", "apple");		// 同じ
compare("apple", "beatles");	// beatlesのが後
compare("apple", "android");	// androidのが前
compare("apple", "Apple");		// 大文字のが前
?>

<?php // キャスト演算子の使用
function compare_2($a, $b) {
	if ($a < $b) {
		echo "{$a}、{$b}の順番".PHP_EOL;
	} else if ($a == $b) {
		echo "{$a}、{$b}は同じ".PHP_EOL;
	} else if ($a > $b) {
		echo "{$b}、{$a}の順番".PHP_EOL;
	}
}
compare_2("120", 99); // 文字列と数値の比較
compare_2("A5", 0);
$num = 99;
compare_2("A5", (string)$num); // $numをstring型にキャストして比較
?>

<?php // 文字列の大きさを比較 strcmp()
function compareStr($a, $b) {
	$result = strcmp($a, $b); // 文字列にキャストして比較
	if ($result < 0) {
		echo "{$a}、{$b}の順番".PHP_EOL;
	} else if ($result == 0) {
		echo "{$a}、{$b}は同じ".PHP_EOL;
	} else if ($result > 0) {
		echo "{$b}、{$a}の順番".PHP_EOL;
	}
}
compareStr("123", 99);
compareStr("A123", 99);
compareStr("009", 99);
?>

<?php // 大文字と小文字を区別せずに比較 strcasecmp()
$id1 = "AB12r";
$id2 = "ab12r";
$result = strcasecmp($id1, $id2);
echo "{$id1}と{$id2}の値を比較した結果、";
if ($result == 0) {
	echo "一致致しました。". PHP_EOL;
} else {
	echo "不一致でした。";
}
?>

<?php // 前方一致で比較する strncasecmp()
function check_3($str2) {
	$str1 = "ABC";
	$result = strncasecmp($str1, $str2, strlen($str1));
	echo "{$str2}は";
	if ($result == 0) {
		echo "{$str1}から始まる。". PHP_EOL;
	} else {
		echo "その他。".PHP_EOL;
	}
}
$id5 = "ABCR70"; // 大文字と小文字を区別せずに比較
$id6 = "xbcM65";
$id7 = "AbcW71";
$id8 = "xABC68"; // ABCが含まれているが先頭ではない

check_3($id5);
check_3($id6);
check_3($id7);
check_3($id8);
?>

