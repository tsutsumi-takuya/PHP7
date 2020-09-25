<?php // 配列の使用と変数作成
$name1 = "赤井一郎";
$name2 = "伊藤五郎";
$name3 = "上野慎二";
$name4 = "江藤幸代";
$name5 = "小野幸子";

$teamA = ["赤井一郎", "伊藤五郎", "上野慎二"];
$teamB = ["江藤幸代", "小野幸子"];

$member1 = ['name' => '赤井一郎', 'age' => 29];
$member2 = ['name' => '伊藤五郎', 'age' => 32];
$member3 = ['name' => '上野慎二', 'age' => 44];
$member4 = ['name' => '江藤幸代', 'age' => 12];
$member5 = ['name' => '小野幸子', 'age' => 34];

$teamA = [$member1, $member2, $member3];
$teamB = [$member4, $member5];
?>

<?php // インデックス配列
$teamA = ["赤井一郎", "伊藤五郎", "上野慎二"];
echo $teamA[0], " 様". PHP_EOL; // $teamA配列の[0]番目要素の出力
echo $teamA[1], " 様". PHP_EOL; // $teamA配列の[1]番目要素の出力
echo $teamA[2], " 様". PHP_EOL; // $teamA配列の[2]番目要素の出力
?>

<?php // 配列の値変更
$teamA = ["赤井一郎", "伊藤五郎", "上野慎二"];
$teamA[0] = "石井四郎"; // $teamA配列の[0]番目要素の上書き
echo $teamA[0], " 様". PHP_EOL;
echo $teamA[1], " 様". PHP_EOL;
echo $teamA[2], " 様". PHP_EOL;
?>

<?php // 配列から値の取り出し
$teamA = ["赤井一郎", "伊藤五郎", "上野慎二"];
for ($i = 0; $i < count($teamA); $i++) { // count()で個数のサーチ
	echo $teamA[$i], " 様". PHP_EOL; // $teamA配列の出力
}
?>

<?php // array() => インデックス配列の作成
$colors = array("赤", "青", "黄色");
print_r($colors); // print_r() => 値がインデックス番号と値のペアで出力
?>

<?php // 配列に値の追加
$colors = []; // 空の配列宣言
$colors[] = "赤"; // 配列の追加 => インデック番号の指定なし
$colors[] = "青";
$colors[] = "黄色";
$colors[] = "緑";
$colors[] = "白";
print_r($colors); // 表示
?>

<?php // 配列に値の追加
$colors = []; // 空の配列宣言
$colors[0] = "赤"; // インデックス番号指定
$colors[1] = "青";
$colors[5] = "黄色"; // この場合、[2] ~ [4]は空き番
$colors[] = "白"; // [5]の次に追加される
print_r($colors);
?>

<?php // 連想配列
$goods = [
"id" => "R56", // $goods配列の[id]には[R56]
"size" => "M", // $goods配列の[size]には[M]
"prise" => 2340 // $goods配列の[prise]には[2340]
];
print_r($goods);
?>

<?php // 連想配列
$goods = [
"id_2" => "R56", // $goods配列の[id]には[R56]
"size_2" => "M", // $goods配列の[size]には[M]
"prise_2" => 2340 // $goods配列の[prise]には[2340]
];

echo "ID : ", $goods["id_2"]. PHP_EOL; // $goods配列の[id_2]の表示
echo "SIZE : ", $goods["size_2"]. PHP_EOL; // $goods配列の[size_2]の表示
echo "PRISE : ", number_format($goods["prise_2"]). PHP_EOL; // $goods配列の[prise_2]の表示 ※ number_format() => 円やドル表示
?>

<?php // 連想配列の値の変更
$goods = [
"id_3" => "R56",
"size_3" => "M",
"prise_3" => 2340
];

$goods["prise_3"] = 3500; // "prise_3"の値を更新

echo "ID : ", $goods["id_3"]. PHP_EOL;
echo "SIZE : ", $goods["size_3"]. PHP_EOL;
echo "PRISE : ", number_format($goods["prise_3"]). PHP_EOL;
?>

<?php // 連想配列の要素追加
$user = [];
$user["name"] = "田中聖";
$user["yomi"] = "たなかこうき";
$user["age"] = 28;
print_r($user);
?>

<?php // 文字列から配列の作成
$data = "赤井一郎, 伊藤五郎, 上野慎二";
$delimiter = ",";
$namelist = explode($delimiter, $data); // explode(区切り文字, 文字列)
print_r($namelist);
?>

<?php // 配列から文字列の作成
$data = ["赤井一郎", "伊藤五郎", "上野慎二"];
$glue = "様, ";
$namelist = implode($glue, $data); // implode(連結文字, 配列)
$namelist .="様"; // 最後の値に付かない為、補足
print_r($namelist);
?>

<?php // 配列を定数にする
define("RANK", ["松", "竹", "梅"]); // RANK定数の作成
echo RANK[1];
?>

<?php // インデックス配列から要素の削除
$myArray = ["a", "b", "c", "d", "e"]; // 元の配列
$removed = array_splice($myArray, 1, 2); // インデックス配列から値を取り除く
echo '実行後：$myArray'. PHP_EOL;
print_r($myArray);
echo '戻り；$removed'. PHP_EOL;
print_r($removed);
?>

<?php // インデックス配列から要素の削除
$myArray = ["a" => 10, "b" => 20, "c" => 30, "d" => 40, "e" => 50]; // 元の配列
$removed = array_splice($myArray, 1, 2); // インデックス配列から値を取り除く
echo '実行後：$myArray'. PHP_EOL;
print_r($myArray);
echo '戻り；$removed'. PHP_EOL;
print_r($removed);
?>

<?php // 配列の先頭から値を取り出す
$myArray = ["a", "b", "c", "d"];
$removed = array_shift($myArray); // $myArray[0]を削除
echo '実行後：$myArray'. PHP_EOL;
print_r($myArray);
echo '戻り；$removed'. PHP_EOL;
print_r($removed);
?>

<?php // インデックス配列から要素の削除
$myArray = ["a", "b", "c", "d", "e"]; // 元の配列
$replace = ["X", "Y", "Z"]; // 置換する配列
$removed = array_splice($myArray, 1, 3, $replace); // 配列の要素を置換 => $myArray[1]~[3]が$replace[0]~[2]になる
echo '実行後：$myArray'. PHP_EOL;
print_r($myArray);
echo '戻り；$removed'. PHP_EOL;
print_r($removed);
?>

<?php // 配列の連結
$a = ["a", "b", "c"]; // $a[0] ~ $a[2]
$b = ["d", "e", "f", "g", "h"]; // $b[0] ~ $b[4]
$result = $a + $b;
print_r($result); // 連結すると、$a[0] ~ $a[2]と$b[3] ~ $b[4]の出力になる
?>

<?php // インデックス配列をarray_merge()で連結する
$a = ["a", "b", "c"];
$b = ["d", "e", "f"];
$c = ["g", "h", "i"];
$result = array_merge($a, $b, $c); // 複数の配列を連結
print_r($result); // 要素が被ることなく表示
?>

<?php // 連想配列をarray_merge()で連結する
$a = ["a" => 1, "b" => 2, "c" => 3];
$b = ["b" => 40, "d" => 50]; // この時点で"b"は40に上書きされる
$result = array_merge($a, $b); // 連想配列の連結
print_r($result);
?>

<?php // 連想配列をarray_merge_recursive()で連結する
$a = ["a" => 1, "b" => 2, "c" => 3];
$b = ["b" => 40, "d" => 50];
$result = array_merge_recursive($a, $b);
print_r($result); // 重複したキー($a[1]と$b[0])の表示
?>

<?php // ２つの配列から連想配列を作成する
$point = ["10", "20", "30", "40", "50"];
$split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];
$result = array_combine($point, $split); // arrary_combine(key, value) => 連想配列にする
print_r($result);
?>

<?php // 配列から重複している値の削除
$a = ["green", "red", "blue"];
$b = ["blue", "pink", "yellow"];
$c = ["pink", "white"];
$all = array_merge($a, $b, $c);
$unique = array_unique($all); // 重複した値の削除
print_r($all); // 重複表示
print_r($unique); // 削除後表示
?>

<?php // 配列の切り出し
$myArray = ["a", "b", "c", "d", "e", "f"];
$slice1 = array_slice($myArray, 0, 3); // インデックス番号０から３個の切り出し
$slice2 = array_slice($myArray, 3, 2); // インデックス番号３から２個の切り出し
$slice3 = array_slice($myArray, -3); // 後ろから３番目から最後までの切り出し
print_r($slice1);
print_r($slice2);
print_r($slice3);
?>

