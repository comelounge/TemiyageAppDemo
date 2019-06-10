<?php
// よく使う関数をまとめたファイル

// 文字列をエスケープするための関数
// htmlspecialchars = 特殊文字をHTMLエンティティに変換。
// ENT_QUOTES	= シングルクオートとダブルクオートを共に変換。
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}
