<?php
// 手みやげに関するクラスを作成

// 名前空間設定
namespace TemiyageDemoApp;

// 手みやげに関するクラスを作成
class Temiyage {
  // プライベートプロパティでDBを設定
  private $_db;

  // DBへの接続（例外処理も
  public function __construct() {
    try {
      $this->_db = new \PDO(DSN, DB_USERNAME, DB_PASSWORD);
      // DBの例外処理についてAttributeの設定
      $this->_db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    } catch (\PDOException $e) {
      // 例外発生時の処理、エラーメッセージを表示する
      echo $e->getMessage();
      exit;
    }
  }

  // 全件抽出のgetAll()メソッド
  public function getAll() {
    $stmt = $this->_db->query("select * from temiyage_list");
    // 抽出結果をオブジェクト形式で返すためにfetchAll()を使って「\PDO::FETCH_OBJ」モードに。
    return $stmt->fetchAll(\PDO::FETCH_OBJ);
  }

}
