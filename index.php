<?php
// 設定ファイルを呼び出す。'__DIR__ .'は現在のディレクトリを表す定義済みの定数。
require_once(__DIR__ . '/config.php');
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/TemiyageList.php');

// get 手みやげ情報
// $temiyageAppに関するインスタンスを作って、名前空間をTemiyageDemoAppとして、Temiyageのインスタンスを作成
$temiyageApp = new \TemiyageDemoApp\Temiyage();
// その後にgetAllというメソッドで$TemiyageListを引っ張ってくる
$TemiyageList = $temiyageApp->getAll();

// var_dump($TemiyageList);
// exit;

 ?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>手みやげアプリDB接続テスト</title>
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
    <header>
    <h1>手みやげ検索</h1>
    </header>
    <section>
      <div class="container">
        <h2>検索結果</h2>
        <ul>
        <?php foreach($TemiyageList as $Temiyage) : ?>
          <li><?php echo h($Temiyage->store), "『{$Temiyage->item}』", "{$Temiyage->price}円"; ?></li>
        <?php endforeach; ?>
        </ul>
      <div>
    </section>
  </body>
</html>
