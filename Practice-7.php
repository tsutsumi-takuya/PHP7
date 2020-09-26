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

class Runner extends Player {
	public $age;

	function __construct($name, $age) { // 
		parent::__construct($name, $age);
		$this->age = $age;
	}

	public function who() { // インスタンスメソッド
		echo "{$this->name}です, {$this->age}歳です。". PHP_EOL;
	}

	public function play() { // インスタンスメソッド
		echo "{$this->name}が走る！！s". PHP_EOL;
	}
}
?>