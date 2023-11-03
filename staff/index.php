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
                <a class="nav-link" href="/">Home</a>
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

        <form name="list" id="list" method="post" action="send.php">
          <label class="closed"><input type="radio" name="status" value="1" class="checkbox">😴準備中</label>
          <label class="empty"><input type="radio" name="status" value="2" class="checkbox">😄空いている</label>
          <label class="little"><input type="radio" name="status" value="3" class="checkbox">😧ちょい混み</label>
          <label class="crowded"><input type="radio" name="status" value="4" class="checkbox">😵げき混み</label>
          <label class="sold"><input type="radio" name="status" value="5" class="checkbox">😫完売</label>
          <label class="stop"><input type="radio" name="status" value="6" class="checkbox">🥺一時販売停止</label>
          <label class="only"><input type="radio" name="status" value="7" class="checkbox">🧋タピオカのみ</label>
          <input type="submit" value="更新">
        </form>
    </main>

    <footer class="glass-filter">
      <p>
        <span class="subTxt">わたしの<span style="color: #f0f;">コハル</span>ちゃんをかえして、、、</span><br>
        Developed by <a href="https://github.com/null8r" title="GitHub" target="_blank" rel="noopener noreferrer">null8r🦋</a>.
      </p>
    </footer>

    <script src=""></script>

    <noscript>

    </noscript>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/twemoji@latest/dist/twemoji.min.js" crossorigin="anonymous"></script>
    <script src="../src/js/main.js"></script>
  </body>
</html>