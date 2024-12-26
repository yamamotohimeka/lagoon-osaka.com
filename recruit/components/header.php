<?php

  
  session_start();
  header('X-Frame-Options: DENY');
  $token = sha1(uniqid(rand(), true));
  $_SESSION['key'] = $token;  
    
$RECAPTUER = $_ENV["V3_SECRETKEY"];
$message = null;

if (isset($_REQUEST["recaptchaToken"]) == true)	/* 送信ボタンが押された ? */
{
	/** トークンチェック */
	$token = $_REQUEST["recaptchaToken"];

	if (token_chk($token) == true)	/* トークンチェックOK */
	{
		$message = "<p class=\"OK\">reCAPTCHAチェックOKです。</p>";
	}
	else
	{
		$message = "<p class=\"NG\">reCAPTCHAチェックNGです。</p>";
	}
}

function token_chk($token)
{
	global $RECAPTUER;

	/** ステータス初期化 */
	$sts = false;

	$result = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=${RECAPTUER}&response=${token}");
	$chk = json_decode($result);

	if ($chk->success == true)	/* トークンエラー */
	{
		$sts = true;
	}
	/** 処理終了 */
	return $sts;
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="icon" href="<?php echo $path; ?>assets/images/favicon.png" />

  <title><?php echo $title; ?>La Goon 求人</title>

  <meta name="description" content="大阪 「La Goon」の求人サイトです｡当店は女の子第一主義のお店です!そして10代の女の子が稼げるお店です!" />
  <link rel="canonical" href="/recruit/" />
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="La Goon 求人" />
  <meta property="og:description" content="大阪 「La Goon」の求人サイトです｡当店は女の子第一主義のお店です!そして10代の女の子が稼げるお店です!" />
  <meta property="og:url" content="/" />
  <meta property="og:site_name" content="La Goon 求人" />
  <meta property="og:image" content="../wp-content/uploads/2022/02/ogp-stop-recruit.png" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta property="og:image:type" content="image/png" />
  <meta name="twitter:card" content="summary_large_image" />
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="pc">
        <div class="header__info ">
          <p>24時間365日女性スタッフが対応</p>
          <div class="header__info__tel">
            <a href="tel:0120-947-854">
              0120-947-854
            </a>
          </div>
        </div>
      </div>
      <div class="header__flex">
        <h1 class="header__logo">
          <a href="#">
            <img src="<?php echo $path; ?>assets/images/logo.png" alt=" La Goonのロゴ">
          </a>
        </h1>
        <nav class="header__nav mincho pc">
          <ul class="header__nav__list">
            <li class="header__nav__list-link">
              <a href="#top">
                <p>
                  未経験のあなたへ
                </p>
              </a>
            </li>
            <li class="header__nav__list-link">
              <a href="#about">
                <p>
                  出稼ぎについて
                </p>
              </a>
            </li>
            <li class="header__nav__list-link">
              <a href="#work">
                <p>
                  待遇について
                </p>
              </a>
            </li>
            <li class="header__nav__list-link">
              <a href="#ex">
                体験入店について
              </a>
            </li>
            <li class="header__nav__list-link">
              <a href="#contact">
                お問い合わせ
              </a>
            </li>
          </ul>
        </nav>
      </div>


      <div class="header__tabButton tab">
        <span></span>
        <span></span>
        <span></span>
      </div>
      <nav class="header__tabNav tab mincho">
        <ul class="header__tabNav__list">
          <li class="header__tabNav__list-link">
            <a href="#">
              未経験のあなたへ
            </a>
          </li>
          <li class="header__tabNav__list-link">
            <a href="#about">
              出稼ぎについて
            </a>
          </li>
          <li class="header__tabNav__list-link">
            <a href="#work">
              待遇について
            </a>
          </li>
          <li class="header__tabNav__list-link">
            <a href="#ex">
              体験入店について
            </a>
          </li>
          <li class="header__tabNav__list-link">
            <a href="#contact">
              お問い合わせ
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>