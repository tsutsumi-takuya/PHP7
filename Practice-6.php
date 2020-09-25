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

<?php // 文字列から配列の作成 => explode(区切り文字, 文字列)
$data = "赤井一郎, 伊藤五郎, 上野慎二";
$delimiter = ",";
$namelist = explode($delimiter, $data);
print_r($namelist);
?>

<?php // 配列から文字列の作成 => implode(連結文字, 配列)
$data = ["赤井一郎", "伊藤五郎", "上野慎二"];
$glue = "様, ";
$namelist = implode($glue, $data);
$namelist .="様"; // 最後の値に付かない為、補足
print_r($namelist);
?>

<?php // 配列を定数にする
define("RANK", ["松", "竹", "梅"]); // RANK定数の作成
echo RANK[1];
?>

<?php // インデックス配列から要素の削除 => array_splice()
$myArray = ["a", "b", "c", "d", "e"]; // 元の配列
$removed = array_splice($myArray, 1, 2); // インデックス配列から値を取り除く
echo '実行後：$myArray'. PHP_EOL;
print_r($myArray);
echo '戻り；$removed'. PHP_EOL;
print_r($removed);
?>

<?php // インデックス配列から要素の削除 => array_splice()
$myArray = ["a" => 10, "b" => 20, "c" => 30, "d" => 40, "e" => 50]; // 元の配列
$removed = array_splice($myArray, 1, 2); // インデックス配列から値を取り除く
echo '実行後：$myArray'. PHP_EOL;
print_r($myArray);
echo '戻り；$removed'. PHP_EOL;
print_r($removed);
?>

<?php // 配列の先頭から値を取り出す => array_shift()
$myArray = ["a", "b", "c", "d"];
$removed = array_shift($myArray); // $myArray[0]を削除
echo '実行後：$myArray'. PHP_EOL;
print_r($myArray);
echo '戻り；$removed'. PHP_EOL;
print_r($removed);
?>

<?php // インデックス配列から要素の削除 => array_splice()
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

<?php // インデックス配列を連結する => array_merge()
$a = ["a", "b", "c"];
$b = ["d", "e", "f"];
$c = ["g", "h", "i"];
$result = array_merge($a, $b, $c); // 複数の配列を連結
print_r($result); // 要素が被ることなく表示
?>

<?php // 連想配列を連結する => array_merge()
$a = ["a" => 1, "b" => 2, "c" => 3];
$b = ["b" => 40, "d" => 50]; // この時点で"b"は40に上書きされる
$result = array_merge($a, $b); // 連想配列の連結
print_r($result);
?>

<?php // 連想配列を連結する => array_merge_recursive()
$a = ["a" => 1, "b" => 2, "c" => 3];
$b = ["b" => 40, "d" => 50];
$result = array_merge_recursive($a, $b);
print_r($result); // 重複したキー($a[1]と$b[0])の表示
?>

<?php // ２つの配列から連想配列を作成する => array_combine()
$point = ["10", "20", "30", "40", "50"];
$split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"];
$result = array_combine($point, $split); // arrary_combine(key, value) => 連想配列にする
print_r($result);
?>

<?php // 配列から重複している値の削除 => array_unique()
$a = ["green", "red", "blue"];
$b = ["blue", "pink", "yellow"];
$c = ["pink", "white"];
$all = array_merge($a, $b, $c);
$unique = array_unique($all); // 重複した値の削除
print_r($all); // 重複表示
print_r($unique); // 削除後表示
?>

<?php // 配列の切り出し => array_slice()
$myArray = ["a", "b", "c", "d", "e", "f"];
$slice1 = array_slice($myArray, 0, 3); // インデックス番号０から３個の切り出し
$slice2 = array_slice($myArray, 3, 2); // インデックス番号３から２個の切り出し
$slice3 = array_slice($myArray, -3); // 後ろから３番目から最後までの切り出し
print_r($slice1);
print_r($slice2);
print_r($slice3);
?>

<?php // 配列から順に値を取り出す => foreach($array as $value)
$valuelist = [5, -3, 12, 6, 9];
$sum = 0;
foreach ($valuelist as $value) { // 配列から順に値を取り出す
	if ($value>0) { // $valueが0以上の場合
		$sum += $value;
	}
}
echo "正の値の合計は{$sum}です。";
?>

<?php // 配列からキーと値を順に取り出して繰り返す
$data = ["ID" => "TR123", "商品名" => "ピークハント", "価格" => 14500];
foreach ($data as $key => $value) { // $keyと$valueには$data配列の値が入る
	echo $key, "：", $value. PHP_EOL; // $key => ID,商品名,価格　$value => TR123,ピークハント,14500
}
?>

<?php // 配列から条件に当てはまる値の抽出 => array_filter($myArray, callback)
function isPlus($value) { // コールバック関数
	return $value>0;
}
$valuelist = ["a" => 3, "b" => 0, "c" => 5, "d" => -2, "e" => 4];
$filtered = array_filter($valuelist, "isPlus"); // isPlusの条件に当てはまる者のみ抽出
print_r($filtered);
?>

<?php // インデックス配列を変数に展開
$data = ["a987", "鈴木薫", "29"];
list($id, $name, $age) = $data; // 配列$dataの値が各変数に入る
echo "会員ID：", $id. PHP_EOL;
echo "会員名前：", $name. PHP_EOL;
echo "会員年齢：", $age. PHP_EOL;
?>

<?php // 配列の値を昇順にソートする => sort()
$sort = [23, 16, 8, 42, 15, 4];
sort($sort); // 値が小 → 大にソート
print_r($sort);
?>

<?php // 配列の値を降順にソートする => rsort()
$sort = [23, 16, 8, 42, 15, 4];
rsort($sort); // 値が大 → 小にソート
print_r($sort);
?>

<?php
$sort = [23, 16, 8, 42, 15, 4];
$clone = $sort;
sort($clone);
rsort($reset);
echo "元の配列：";
print_r($sort). PHP_EOL;
echo "変更後の配列：";
print_r($clone). PHP_EOL;
?>

<?php // 連想配列の値を昇順にソートする => asort()
$data = ["S" => 23, "M" => 36, "L" => 29];
asort($data); // 値でソート
print_r($data);
?>

<?php // 値の並びをシャッフルさせる => shuffle()
$namelist = ["佐藤", "田中", "小林", "近藤"];
shuffle($namelist); // シャッフル
print_r($namelist);
?>

<?php // 値の並びを逆順にする => array_reverse()
$namelist = ["佐藤", "田中", "小林", "近藤"];
$result = array_reverse($namelist); // 逆にする
print_r($result);
?>

<?php // 自然順に並べる => natsort()
$data = ["image7", "image12", "image1"];
natsort($data); // 自然順にソート
print_r($data);
?>

<?php // 配列の値を比較、検索する
$numList = [1008, 1234, 1301]; // チェックする番号
$numbers = [1301, 1206, 1008, 1214]; // 合格番号の配列

function checkNumber($no) {
	global $numbers;
	if (in_array($no, $numbers)) { // 合格番号に$noが含まれているかのチェック => in_array()
		echo "{$no}番は合格です！！". PHP_EOL;
	} else {
		echo "{$no}番は不合格です。". PHP_EOL;
	}
}

foreach ($numList as $value) {
	echo checkNumber($value); // $numListの値を順番にチェックする
}
?>

<?php // 文字列の配列を検索する(完全一致)
$nameList = ["田中達也", "Sam smith", "新井貴子"];

function nameCheck($name) {
	global $nameList;
	if (in_array($name, $nameList)) { // $nameListに$nameが含まれているかのチェック  => in_array()
		echo "メンバーです。". PHP_EOL;
	} else {
		echo "メンバーではありません。". PHP_EOL;
	}
}
echo nameCheck("田中達也"); // 完全一致なのでtrue
echo nameCheck("新井"); // 不完全一致なのでfalse
echo nameCheck("Sam smith"); // 完全一致なのでtrue
echo nameCheck("SAM SMITH"); // 不完全一致なのでfalse
?>

<?php // 配列に新規の値のみ追加する => array_addUnique
function array_addUnique(&$array, $value) {
	if (in_array($value, $array)) { // $arrayに値が含まれているかのチェック  => in_array()
		return false; // 含まれていたら何もなし
	} else {
		$array[] = $value; // 含まれていなかったら追加
		return true;
	}
}
$myList = ["blue", "green"];
array_addUnique($myList, "white");
array_addUnique($myList, "blue");
array_addUnique($myList, "red");
array_addUnique($myList, "green");
print_r($myList);
?>

<?php // 見つかったキーで別の配列から値を取り出す
$nameList = ["m01" => "田中達也", "m02" => "佐々木真一", "w01" => "新井貴子", "w02" => "笠井薫"]; // 名前の配列
$ageList = ["m01" => 34, "m02" => 42, "w01" => 28, "w02" => 41]; // 年齢の配列

function getAge($name) {
	global $nameList;
	global $ageList;
	$key = array_search($name, $nameList); // 見つかった名前のキーを取り出す  => array_search()
	if ($key !== false) {
		$age = $ageList[$key]; // $ageListの同じキーの年齢を取り出す
		echo "{$name}さんは{$age}歳です。";
	} else {
		echo "『{$name}さんはメンバーではありません。』";
	}
}
echo getAge("新井貴子"). PHP_EOL;
echo getAge("田中達也"). PHP_EOL;
echo getAge("遠藤肖像"). PHP_EOL;
echo getAge("佐々木真一"). PHP_EOL;
?>

<?php // 配列比較をして一致しない値を見つける
$checkID = ["a21", "d21", "d33", "e53"]; // チェックする配列
$aList = ["a12", "b15", "d21"]; // 基準となる配列
$bList = ["d13", "e53", "f10", "k12"]; // 基準となる配列

$diffID = array_diff($checkID, $aList, $bList); // $aListと$bListのどちらにもない値を調べる => array_diff()
foreach ($diffID as $value) {
	echo "{$value}は新規です。". PHP_EOL;
}
?>

<?php // 配列の値を検索置換する => str_replace()
$data = ["NV15", "ST", "MD500GB"]; // 略語を検索して置換
$search = ["NV", "ST", "MD"];
$replacement = ["New Vision", "スリムタワー", "マルチドライブ"];

$result = str_replace($search, $replacement, $data);
echo "商品データ：". PHP_EOL;
echo $result[0], "、", $result[1], "、", $result[2]. PHP_EOL;
?>

<?php // 正規表現を使って配列の検索をする => preg_grep(()
$namelist = ["田中達也", "川崎賢一", "山田一郎", "杉山直樹"];
$pattern = "/田/";
$result = preg_grep($pattern, $namelist); // パターンにマッチする値を配列から全て取り出す
echo "該当". count($result). "件". PHP_EOL;
foreach ($result as $value) {
	echo $value. PHP_EOL;
}
?>

<?php // マッチしない値の配列
$data =["R5", "E2", "E6", "A8", "R1", "G8"];
$pattern = "/['A'|'R']/"; // AとRを含みかどうか
$result = preg_grep($pattern, $data, PREG_GREP_INVERT); // PREG_GREP_INVERT => マッチしなかった値の取り出し
echo "該当しない". count($result). "件". PHP_EOL;
$resultString = implode($result, "、"); // 値の連結
echo $resultString. PHP_EOL;
?>

<?php // 配列の値を正規表現で検索置換する
$data = [];
$data[] = ["name" => "井上真実", "age" => 37, "phone" => "090-4321-9999"];
$data[] = ["name" => "坂本京子", "age" => 32, "phone" => "06-3434-7788"];
$data[] = ["name" => "石岡　涼", "age" => 29, "phone" => "0467-89-9191"];
$data[] = ["name" => "多田雄美", "age" => 35, "phone" => "59-1212"];
$pattern = "/(-)\d{4}$/";
$replacement = "$1****";

foreach ($data as $user) {
	$result = preg_replace($pattern, $replacement, $user); // 番号の末尾４桁を伏せ字に置換する
	foreach ($result as $key => $value) { // 配列のキーと値の表示
		echo "{$key}：", $value. PHP_EOL;
	}
}
?>

<?php // 配列の値をドル換算して表示
function exchangeList($value, $key, $rateData) { // コールバック関数
	$rate = $rateData["rate"]; // レート換算
	if ($rate == 0) {
		return;
	}
	$price = $value / $rate;
	$exPrice = sprintf('%.02f', $price); // 下２桁まで表示
	echo $rateData["symbol"], $exPrice. PHP_EOL; // 通過シンボルを付ける
}
$priceList = [2300, 1200, 4000]; // 円での値段
$dollaryen = ["symbol" => '$', "rate" => 112.50]; // 円のドルレート
echo array_walk($priceList, "exchangeList", $dollaryen); // 通過換算
?>

<?php // 通過換算するコールバック関数
function exchange($value) {
	global $rate;
	if ($rate == 0) {
		$rate = 1;
	}
	$exPrice = $value / $rate; // レート換算する
	$exPrice = round($exPrice*100)/100; // 少数第２位に丸める
	return $exPrice;
}
$priceYen = [2300, 1200, 4000]; // 円での値段
$rate = 112.50; // 円のドルレート
$priceDollar = array_map("exchange", $priceYen); // 配列の個々の値でコールバック関数を実行 => array_map()
print_r($priceDollar);
?>

<?php // コールバック関数で２つの配列を合わせてリスト表示
function listUp($value1, $value2) {
	echo $value1, " -- ", $value2. PHP_EOL;
}
$point = ["10km", "20km", "30km", "40km", "Goal"]; // 通過地点の配列
$split = ["00:50:37", "01:39:15", "02:28:25", "03:21:37", "03:34:44"]; // スプリットの配列
array_map("listUp", $point, $split); // 複数の配列を並列的にコールバック関数で処理する => array_map()
?>

