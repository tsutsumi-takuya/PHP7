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

