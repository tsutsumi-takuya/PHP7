<?php
class Staff {

	// public => どこからでもアクセス可能
	// protected => 定義したクラスと子クラスからアクセス可能
	// private => 定義したクラス内のみでアクセス可能

	public static $piggyBank = 0; // クラスプロパティ
	public static function deposit(int $yen) { // クラスメソッド
		self::$piggyBank += $yen; // クラスメソッド中でクラスプロパティの使用
	}

	public $name; // インスタンスプロパティ
	public $age;

	function __construct($name, $age) { // コンストラクタ
		$this->name = $name; // 各プロパティに初期値を設定
		$this->age = $age;
	}

	public function hello() { // インスタンスメソッド
		if (is_null($this->name)) {
			echo "こんにちは！". PHP_EOL;
		} else {
			echo "こんにちは、{$this->name}！". PHP_EOL; // {$name}ではアクセス不可
		}
	}

	public function latePenalty() { // 遅刻して罰金
		self::deposit(1000); // スタティックメソッドの実行 => 遅刻すると1000円追加
	}
}
?>

<?php
class Player { //Playerクラスの定義

	public $name; // インスタンスプロパティ

	function __construct($name = '名無し') { // $name = '' => 引数が省略された場合の初期値
		$this->name = $name;
	}

	public function __toString() { // マジックメソッドの定義
		return $this->name;
	}

	public function who() { // インスタンスメソッド
		echo "{$this->name}です". PHP_EOL;
	}
}
?>

<?php
require_once("Practice-7.php"); // Playerクラスファイルの読み込み

class Soccer extends Player // SoccerクラスにPlayerクラスの継承
{
	public function play() { // インスタンスメソッド
		echo "{$this->name}がシュート！！". PHP_EOL;
	}
}

?>

<?php
require_once("Practice-7.php"); // Playerクラスファイルの読み込み

class Runner extends Player { // RunnerクラスにPlayerクラスの継承
	public $age;

	function __construct($name, $age) { // コンストラクタ
		parent::__construct($name); // 親クラス(Player)のコンストラクタの呼び出し
		$this->age = $age;
	}

	public function who() { // Playerクラスのwho()をオーバーライドさせる
		echo "{$this->name}です, {$this->age}歳です。". PHP_EOL;
	}

	public function play() { // インスタンスメソッド
		echo "{$this->name}が走る！！s". PHP_EOL;
	}
}
?>

<?php
trait DateTool { // DateToolトレイトの定義
	public function ymdString($date) { // DateTimeを年月日の書式で返す
		$dateString = $date->format('Y年m月d日');
		return $dateString;
	}

	public function addYmdString($date, $days) { // 指定日数後の年月日で返す
		$date->add(new DateInterval("P{$days}D"));
		return $this->ymdString($date);
	}
}
?>

<?php
require_once("Practice-7.php");

class Milk {
	use DateTool; // useキーワードでトレイトを指定
	public $theDate;
	public $limitDate;

	function __construct() {
		$now = new DateTime(); // 今日の日付を取得
		$this->theDate = $this->ymdString($now); // 年月日に変換して設定
		$this->limitDate = $this->addYmdString($now, 10); // 10日後の日付を作成
	}
}
?>

<?php
trait Tarotool { // トレイトの定義
	public function hello() {
		echo "ハロー！！";
	}
	public function weekday() {
		$week = ["日", "月", "火", "水", "木", "金", "土"]; // 曜日の定義
		$now = new DateTime(); // 現時点での日付取得
		$w = (int)$now->format('w'); // 曜日をint型に変換
		$weekday = $week[$w]; // 変数へ曜日の代入
		echo "今日は", $weekday, "曜日です。". PHP_EOL;
	}
}
?>

<?php
trait Hanatool { // トレイトの定義
	public function hello() {
		echo "ごきげんよう！！";
	}
}
?>

<?php
require_once("Practice-7.php");

class MyClass {
	use Tarotool, Hanatool {
		Tarotool::hello as taroHello; // 別名のhelloを作成
		Hanatool::hello as hanaHello;
		Hanatool::hello insteadof Tarotool; // A insteadof B => Bの代わりにA ※ この場合HanaToolのhello()を使用
	}
}
?>

