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

