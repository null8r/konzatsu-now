<?php
  //dbと接続
  $db = 'mysql:host=ホスト名;dbname=データベース名;charset=utf8mb4';
  $user = 'ユーザー名';
  $passwd = 'パスワード';

  $PDO = new PDO($db, $user, $passwd);

  //前画面のformから受け取る
  $status = $_POST['status'];

  //sqlのコマンド :statusは変数
  $status_table = 'テーブル名';
  $sql = "UPDATE " . $status_table . " SET status=:status";

  //変数が空のまま、sql実行の準備
  $stmt = $PDO->prepare($sql);
  //変数の格納
  $params = array(':status' => $status);
  //sql実行
  $stmt->execute($params);

  echo "更新しました。\n前のページに戻るかこのページを閉じてください。";
?>