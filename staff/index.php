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
    <link href="../src/css/main.css" rel="stylesheet">
    <link href="./src/css/staff.css" rel="stylesheet">
    
    <title>こんざつなう！ / 3-2</title>
  </head>

  <body>
    <div id="navbar">
      <nav class="navbar navbar-expand-sm navbar-light fixed-top glass-filter">
        <div class="container-fluid">
          <a class="navbar-brand" href="">😊 こんざつなう！ <span class="subTxt">/ 3-2</span></a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../">Home</a>
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
      <div class="konzatsu">
        <h1 class="boxTitle">
          3年2組<br>
          こんざつ状況を選択
        </h1>

        <div class="status select" style="border: solid 10px #808080;">
          <h1>😴準備中</h1>
          <p>
            まだ販売を開始していません。
          </p>
        </div>
        <div class="status select" style="border: solid 10px #00d000;">
          <h1>😄空いている</h1>
          <p>
            みんな買いに来て！！
          </p>
        </div>
        <div class="status select" style="border: solid 10px #fff000;">
          <h1>😧ちょい混み</h1>
          <p>
            そこそこ並んでいます！！
          </p>
        </div>
        <div class="status select" style="border: solid 10px #ff0088;">
          <h1>😵げき混み</h1>
          <p>
            提供に時間が掛かっています。
          </p>
        </div>
        <div class="status select" style="border: solid 10px #ff0000;">
          <h1>😫完売</h1>
          <p>
            買ってくれてありがとう！！
          </p>
        </div>
      </div>
    </main>

    <footer class="glass-filter">
      <p>
        <?php
            try 
            {   
                $database_handler = new PDO('mysql:host=localhost;dbname=konzatsunow_konzatsu;charset=utf8mb4', 'konzatsunow_db', '73YhLRcXHhY9hgK');
             }   
             catch (PDOException $e) 
             {   
                 echo "DB接続に失敗しました。\n";
                 echo $e->getMessage() . "\n";
                 exit;
             }   
        ?>
        <span class="subTxt">わたしの<span style="color: #f0f;">コハル</span>ちゃんをかえして、、、</span><br>
        Developed by <a href="https://github.com/null8r" title="GitHub" target="_blank" rel="noopener noreferrer">null8r</a>.
      </p>
    </footer>

    <script src=""></script>

    <noscript>
      
    </noscript>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/twemoji@latest/dist/twemoji.min.js" crossorigin="anonymous"></script>
  </body>
</html>