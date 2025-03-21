<!DOCTYPE html>
<html lang="ja">

<head>

  <meta name="google-site-verification" content="" />
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Island+Moments&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap" rel="stylesheet">
  <link rel="icon" href="<?php echo $path; ?>assets/img/favicon.png" />
  <title><?php echo $title; ?> | La Goon ～出会って5秒で恋する予感～の公式WEBサイト</title>

  <!-- SEO設定 -->
  <meta name="description" content="大阪・素人専門ホテルヘルス&デリバリーヘルス　ラ・グーン" />
  <link rel="canonical" href="/recruit/" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="La Goon" />
  <meta property="og:description" content="大阪・素人専門ホテルヘルス&デリバリーヘルス　ラ・グーン" />
  <meta property="og:url" content="/" />
  <meta property="og:site_name" content="La Goon" />
  <meta property="og:image" content="<?php echo $path; ?>assets/img/OGP.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:type" content="image/png" />
  <meta name="twitter:card" content="summary_large_image" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-PB3WM1L4E8"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-PB3WM1L4E8');
  </script>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="pc">
        <div class="header__top">
          <h1>大阪・素人専門ホテルヘルス&デリバリーヘルス　ラ・グーン</h1>
          <div class="header__login">
            <span class="login"><img src="<?php echo $path; ?>assets/img/login-btn.png" alt=""></span>
            <span class="login"><img src="<?php echo $path; ?>assets/img/signin-btn.png" alt=""></span>
          </div>
        </div>
      </div>
      <div class="header__info">
        <div class="header__info-logo">
          <a href="<?php echo $path; ?>"><img src="<?php echo $path; ?>assets/img/logo.png" alt="ラ・グーン"></a>
        </div>

        <div class="header__info-tel">
          <a href="tel:0120-947-854">TEL/<span>0120-947-854</span></a>
          <p>24時間営業</p>
        </div>
      </div>
    </div>

    <nav class="header__nav pc">
      <div class="container">
        <ul class="header__nav__list">
          <li class="header__nav__list-link <?php if ($templete === 'top') echo 'active'; ?>">
            <a href="<?php echo $path; ?>">
              <p>トップ <span>top</span></p>
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete=== 'cast') echo 'active'; ?>">
            <a href="<?php echo $path; ?>girl.php">
              <p>女の子一覧<span>girl's</span></p>
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'schedule') echo 'active'; ?>">
            <a href="<?php echo $path; ?>schedule.php">
              <p>出勤情報<span>attendance</span></p>
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'newface') echo 'active'; ?>">
            <a href="<?php echo $path; ?>newface.php">
              <p>新人情報<span>new face</span></p>
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'diary') echo 'active'; ?>">
            <a href="<?php echo $path; ?>diary.php">
              <p>写メ日記<span>photo BBS</span></p>
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'event') echo 'active'; ?>">
            <a href="<?php echo $path; ?>event.php">
              <p>イベント<span>event</span></p>
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'access') echo 'active'; ?>">
            <a href="<?php echo $path; ?>access.php">
              <p>アクセス<span>access</span></p>
            </a>
          </li>
          <li class="header__nav__list-link <?php if ($templete === 'system') echo 'active'; ?>">
            <a href="<?php echo $path; ?>system.php">
              <p>システム<span>system</span></p>
            </a>
          </li>
        </ul>
      </div>
    </nav>



    <div class="header__main-tab tab"></div>
    <div class="header__tabButton-nav-wrap tab">
      <div class="header__tabButton-nav ">
        <div class="header__tabButton-login login">
          <img src="<?php echo $path; ?>assets/img/tab-signin.png" alt="新規登録">
          <span>新規登録</span>
        </div>
        <div class="header__tabButton-login login">
          <img src="<?php echo $path; ?>assets/img/tab-login.png" alt="会員ログイン">
          <span>会員ログイン</span>
        </div>
        <div class="header__tabButton">
          <img src="<?php echo $path; ?>assets/img/tab-menu.png" alt="メニュー">
          <span>メニュー</span>
        </div>
      </div>
      <nav class="header__tabNav tab">
        <div class="container">
          <div class="header__tabNav__close">
            <span></span>
          </div>
          <ul class="header__tabNav__list">
            <li class="header__tabNav__list-link">
              <a href="<?php echo $path; ?>" class="header__link">
                TOP
              </a>
            </li>
            <li class=" header__tabNav__list-link">
              <a href="<?php echo $path; ?>girl.php" class="header__link">
                女の子一覧
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="<?php echo $path; ?>schedule.php" class="header__link">
                出勤情報
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="<?php echo $path; ?>newface.php" class="header__link">
                <p>新人情報</p>
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="<?php echo $path; ?>diary.php" class="header__link">
                写メ日記</a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="<?php echo $path; ?>event.php" class="header__link">
                イベント</a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="<?php echo $path; ?>access.php" class="header__link">
                <p>アクセス</p>
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="<?php echo $path; ?>system.php" class="header__link">
                システム
              </a>
            </li>
            <li class="header__tabNav__list-link">
              <a href="<?php echo $path; ?>recruit.php" class="header__link">
                求人
              </a>
            </li>
          </ul>
        </div>
      </nav>
  </header>

  <div class="login-modal" id="login-modal">
    <div class="login-modal__content">
      <h3>会員様ログイン</h3>
      <div class="login-modal__content__form">
        <p>ユーザーID</p>
        <input type="text" name="email" placeholder="ユーザーID">
        <p>パスワード</p>
        <input type="password" name="password" placeholder="パスワード">
      </div>
      <div class="login-modal__content__link">
        <p><a href="" class="login">パスワードを忘れた方はコチラから</a></p>
        <p><a href="" class="login">新規会員登録はコチラから</a></p>
      </div>
    </div>
  </div>