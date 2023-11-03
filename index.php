<!--
  Hello, Developers!
-->

<!DOCTYPE html>
<html lang="ja">
  <head prefix="og:https://ogp.me/ns#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@600&display=swap" rel="stylesheet">
    <link href="./src/css/main.css" rel="stylesheet">

    <title>こんざつなう！ / 3-2</title>
  </head>

  <body>
    <div id="navbar">
      <nav class="navbar navbar-expand-sm navbar-light fixed-top glass-filter">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">😊 こんざつなう！ <span class="subTxt">/ 3-2</span></a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="./staff">Staff</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://github.com/null8r/konzatsu-now">README</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>

    <main id="top" class="glass-filter">
      <?php
      //dbと接続
      $db = 'mysql:host=ホスト名;dbname=データベース名;charset=utf8mb4';
      $user = 'ユーザー名';
      $passwd = 'パスワード';

      $PDO = new PDO($db, $user, $passwd);

      //sql、混雑状況の取得
      $status_table = 'テーブル名';

      $sql_status = "SELECT * FROM " . $status_table . ";";
      $res_status = $PDO->query($sql_status);

      //配列整理
      $status = $res_status->fetchAll();
      $status = $status[0]['status'];

      //sql、取得した混雑状況を元にステータスとインフォ、枠の色を取得
      $konzatsu_tabele = 'テーブル名';
      
      $sql_main = "SELECT * FROM " . $konzatsu_tabele . " WHERE id = ". $status . ";";
      $stmt = $PDO->query($sql_main);

      //配列整理
      $data = $stmt->fetchAll();
      ?>

      <div class="konzatsu">
        <h1 class="boxTitle">
          本館3階 3年2組<br>
          こんざつ状況
        </h1>

        <p>
          最新情報を確認するには更新してください。
        </p>

        <div class="status" style="border: solid 10px <?php echo $data[0]['color']; ?>">
          <h1><?php echo $data[0]['status']; ?></h1>
          <p>
            <?php echo $data[0]['info']; ?>
          </p>
        </div>

        <p>
          ※実際とは異なる場合があります。
        </p>
      </div>
    </main>

    <footer class="glass-filter">
      <p>
        <span class="subTxt">わたしの<span style="color: #f0f;">コハル</span>ちゃんをかえして、、、</span><br>
        Developed by <a href="https://github.com/null8r" title="GitHub" target="_blank" rel="noopener noreferrer">null8r🦋</a>. 
      </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/twemoji@latest/dist/twemoji.min.js" crossorigin="anonymous"></script>
    <script src="./src/js/main.js"></script>
  </body>
</html>