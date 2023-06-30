<?php
// クラス定義雛形
class Sample {
    // インスタンスが持つ変数（値）
    public $value1 = '';
    public $value2 = 123;
    public $value3 = true;
    
    // インスタンスを初期化するための、特別な関数
    function __construct($value1) {
        $this->value1 = $value1;
    }
    
    // インスタンスが持つ関数（処理）
    function test($name) {
        print $this->value1 . '、' . $name . 'さん！' . PHP_EOL;
    }
}

// インスタンスの生成と、変数への代入
$sample1 = new Sample('こんにちは');

// インスタンスの使用
$sample1->test('太郎');

?>