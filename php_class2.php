<?php
  class Character {
    public static $type = '';
    public $suffix = '';
    // 以下２つはわかりやすくしているだけで無くてもいい
    public $hp = 1;
    public $power = 1;
    
    // $thisはnew Characterでは無く、サブクラスのインスタンス
    // $suffixにデフォルト値を設定することで引数なしでnewしてもエラーにならない（デフォルト値を設定する引数は最後に記述）
    function __construct($hp, $power, $suffix = '') {
      $this->hp = $hp;
      $this->power = $power;
      $this->suffix = $suffix;
    }
    
    function name() {
      // self::$typeだとCaracterクラスの$typeの空欄が呼び出されてしまうので、子クラスの$typeを呼び出している
      return $this::$type . $this->suffix;
    }
    
    function attack($character) {
      print $this->name() . 'が' . $character->name() . 'を攻撃して' . $this->power . 'ポイントのダメージを与えた!' . PHP_EOL;
      
      $character->hp = $character->hp - $this->power;
      
      if ($character->hp <= 0) {
        $this->defeat($character);
      }
    }
    
    function defeat($character) {
      print $this->name() . 'は' . $character->name() . 'を倒した！' . PHP_EOL;
    }
    
    static function description() {
      print 'このゲームのキャラクターです' . PHP_EOL;
    }
    
  }
    
  class Slime extends Character {
    // オーバーライド
    public static $type = 'スライム';
    
    static function description() {
      print self::$type . 'は、最弱のモンスターだ!' . PHP_EOL;
    }
  }
    
  class Hero extends Character {
    // オーバーライド
    public static $type = '主人公';
      
    static function description() {
      print self::$type . 'は、この世界を守る勇者だ!' . PHP_EOL;
    }
  }
    
  Slime::description();
  Hero::description();
    
  // characterクラスを継承している、newの時点でconstructが起動する
  $slime_A = new Slime(10, 3, 'A');
  $hero = new Hero(1000, 30);
    
  // 引数にインスタンスを渡せる
  $slime_A->attack($hero);
  $hero->attack($slime_A);

?>