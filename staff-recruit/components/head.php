<?php
$path = './';
$url = 'https://lagoon.tribe-webtest.xyz/staff-recruit/';
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>ラグーン スタッフ求人サイト</title>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="大阪 「La Goon」のスタッフ求人サイトです｡高収入を掴み取れるチャンスがあります。">
  <meta property="og:locale" content="ja_JP" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="ラグーン スタッフ求人サイト" />
  <meta property="og:description"
    content="大阪 「La Goon」のスタッフ求人サイトです｡高収入を掴み取れるチャンスがあります。" />
  <meta property="og:url" content="<?php echo $url; ?>" />
  <meta property="og:site_name" content="ラグーン スタッフ求人サイト" />
  <meta property="og:image" content="<?php echo $url; ?>assets/img/ogp.jpg" />
  <meta property="og:image:width" content="1200" />
  <meta property="og:image:height" content="630" />
  <meta name="twitter:card" content="summary_large_image" />

  <link rel="stylesheet" href="<?php echo $path; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <link rel="icon" href="<?php echo $path; ?>assets/img/favicon.ico" />

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-PB3WM1L4E8"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-PB3WM1L4E8');
  </script>
</head>

<body>