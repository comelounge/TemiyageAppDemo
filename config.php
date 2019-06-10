<?php
// 設定ファイル

// エラーが出た時にブラウザに表示してくれる設定
ini_set('display_errors', 1);

// ★DBの設定
// PDOを使うためのDSN(Data Source Name)の設定、MySQLの場合の決まり文句
define('DSN', 'mysql:host=mysql****.db.sakura.ne.jp;dbname=username_dbname');

// ユーザーネーム
define('DB_USERNAME', 'username');

// パスワード
define('DB_PASSWORD', '*************');
