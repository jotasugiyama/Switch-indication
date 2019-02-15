
<!-- スマホ -->
<?php require_once('data.php');
?><!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, user-scale=yes, initial-scale=1.0, maximum-scale=5.0" />
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <title><?php echo $title ?></title>
  <link rel="stylesheet" type="text/css" href="http://yui.yßahooapis.com/3.18.1/build/cssreset/cssreset-min.css" />
  <link rel="stylesheet" href="./mobile/style.css" />
  <link rel="stylesheet" href="./mobile/responsive.css" />
  <script src="//code.jquery.com/jquery-1.12.1.min.js"></script>
</head>
<body>
  <!-- ヘッダー -->
  <header>
    <div class="container">
      <div class="header-left">
        <i class="fas fa-align-justify" id="humberger"></i>
      </div>
      <nav class="menu">
        <div class="top">
          <ul>
            <li id="a"><?php echo $sub?></li>
            <li><?php echo $log?></li>
          </ul>
        </div>
        <div class="kiji">
          <p>
            記事
          </p>
          <ul>
            <li><?php echo $fassion?></li>
            <li><?php echo $maik?></li>
            <li><?php echo $hair?></li>
            <li><?php echo $nail?></li>
            <li><?php echo $beauty?></li>
            <li><?php echo $life?></li>
            <li><?php echo $heart?></li>
            <li><?php echo $gurume?></li>
            <li><?php echo $travel?></li>
            <span id="unko"><li>戻る<i class="fas fa-undo-alt"></i></li></span>
          </ul>
        </div>
      </nav>
      <div class="header-logo">
        <?php echo $title ?>
      </div>
      <div class="header-right">
        <i class="fas fa-search"></i>
      </div>
    </div>
    <div class="search">
      <div class="search-text">
        <span>戻る<i class="fas fa-undo-alt"></i></span>
        <p>
          記事検索
        </p>
      </div>
    </div>
  </header>
  <!-- トップコンテンツ -->
  <div class="top-contents">
    <div class="text">
      <h4><?php echo $titleText ?></h4>
    </div>
  </div>

  <div class="contents2">
    <div class="select">
      <ul>
        <li class="pick">
          <?php echo $pickup ?>
        </li>
        <li class="hoge">
          <?php echo $rank ?>
        </li>
      </ul>
    </div>

    <div class="pick-items">
      <?php foreach($articles as $article): ?>
        <div class="item">
          <div class="left">
            <img src="<?php echo $article->getImg()?>" class="item-img">
          </div>
          <div class="right">
            <h4 class="item-title"><?php echo $article->getTitle()?></h4>
            <p>
              <span class="view"><?php echo $article->getView() ?> views</span>
              <span class="name"><?php echo $article->getName() ?> <i class="fas fa-star"></i></span>
            </p>
          </div>
        </div>
      <?php endforeach ?>
    </div>

    <div class="rank-items">
      <?php foreach($rankings as $ranking):?>
        <?php ?>
        <div class="rank-item">
          <div class="left">
            <img src="<?php echo $ranking->getImg()?>" class="item-img">
          </div>
          <div class="right">
            <h4 class="item-title"><?php echo $ranking->getTitle()?></h4>
            <p>
              <span class="view"><?php echo $ranking->getView() ?> views</span>
              <span class="name"><?php echo $ranking->getName() ?> <i class="fas fa-star"></i></span>
            </p>
          </div>
        </div>
      <?php endforeach?>
      </div>
    </div>

    <!-- 広告 -->
    <div class="ad">
      <h1>広告</h1>
    </div>


    <!-- おすすめ記事 -->
    <div class="recomend">
      <div class="reco-title">
        <h4>おすすめの記事</h4>
      </div>
      <div class="recomend-items">
        <?php foreach($recomends as $recomend): ?>
          <div class="item">
            <div class="left">
              <img src="<?php echo $recomend->getImg()?>" class="item-img">
            </div>
            <div class="right">
              <h4 class="item-title"><?php echo $recomend->getTitle()?> </h4>
              <p>
                <span class="view">
                  <?php echo $recomend->getView()?> views</span>
                  <span class="name"><?php echo $recomend->getName() ?> <i class="fas fa-star"></i></span>
                </p>
              </div>
            </div>
          <?php endforeach?>
        </div>
      </div>

      <footer>
        <div class="install-contents">
          <div class="girl-ad">
            <div class="girl-text">
              <p>
                <?php echo $text?>
              </p>
            </div>
            <div class="app">
              <?php echo $title ?>
            </div>
            <div class="icon-bottom-text">
              <p>アプリでサクサク読もう。</p>
            </div>
          </div>
          <div class="aiu">
            <!-- <div class="eo"> -->
            <div class="message">
              <p><?php echo $mesage ?></p>
            </div>
            <div class="install-btn">
              <h3><a>アプリストアで無料インストール</a></h3>
            </div>
            <!-- </div> -->
          </div>
        </div>

        <!-- フォローミー -->
        <div class="follow">
          <div class="follow-text">
            <?php echo $follow ?>
          </div>
          <ul class="sns-icons">
            <li class="icon facebook"><a><i class="fab fa-facebook-f"></i></a></li>
            <li class="icon twitter"><a><i class="fab fa-twitter"></i></a></li>
            <li class="icon line"><a><i class="fab fa-line"></i></a></li>
            <li class="icon instagram"><a><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>

        <!-- ページトップへから下 -->
        <div class="final">
          <div class="page">
            <a> <i class="fas fa-angle-up"></i>　<?php echo $page ?> </a>
          </div>
          <div class="uuu">
            <ul>
              <li class="aaa">
                <a><?php echo $probrem ?> </a> |
              </li>
              <li class="aaa">
                <a><?php echo $form ?> </a> |
              </li>
              <li class="aaa">
                <a><?php echo $rule ?></a>
              </li>
            </ul>
          </div>
          <div class="bbb">
            <a>  <?php echo $pri ?> </a>
          </div>
          <div class="ccc">
            <a> <?php echo $unei ?></a>
          </div>
          <div class="ddd">
            <i class="fas fa-archway"></i>
          </div>
          <div class="eee">
            <?php echo $title?>
          </div>
          <p class="fff">
            <?php echo $unko?>
          </p>
        </div>
      </footer>
      <script src="./mobile/script.js"></script>
    </body>
    </html>
