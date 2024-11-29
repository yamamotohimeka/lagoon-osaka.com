<?php
$path = './';
$title = 'La Goon';
$templete = 'top';
include $path . 'components/header.php';
?>


<main class="top">
  <div class="container">
    <div class="top__main">

      <section class="top__event">
        <h2 class="section-title">最新イベント情報</h2>
        <div class="top-swipper">
          <div class="swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="<?php echo $path; ?>event.php">
                  <img src="<?php echo $path; ?>assets/img/slide1.png" alt=""></a>
              </div>
              <div class="swiper-slide">
                <a href="<?php echo $path; ?>event.php">
                  <img src="<?php echo $path; ?>assets/img/slide2.png" alt=""></a>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <section class="top__news">
        <h2>新着情報</h2>
        <div class="top__news-text">
          <p>▼只今開催中イベント▼</p>
          <br>
          <p>
            <span>ご予約時または、店頭受付時に<br>
              【大還元祭】<br>
              とお伝えください。</span>
          </p>
          <p>
            <br>
            ★全コース料金4000円割引<br>
            必ず合言葉をお伝えください。<br><br>
          </p>

          <a href="<?php echo $path; ?>event.php"><img src="<?php echo $path; ?>assets/img/slide2.png" alt=""></a>
        </div>
      </section>
    </div>

    <div class="top__bottom-flex">

      <div class="top__schedule">
        <div class="section-title">
          <h2>本日の出勤 <span> <a href="<?php echo $path; ?>schedule.php">一覧を見る▶</a></span></h2>

        </div>
        <div class="top__cast__box__list">
          <ul class="cast__box__list grid">
            <?php include $path . 'components/girls_card.php';?>
          </ul>
          <a class="link-girl" href="<?php echo $path; ?>schedule.php">
            <p>続きを見る▶</p>
          </a>
        </div>


      </div>

      <div class="top__diary">
        <div class="section-title">
          <h2>写メ日記</h2>
        </div>
        <ul class="top__diary-list">
          <?php include $path . 'components/diary.php';?>
        </ul>
      </div>

    </div>

  </div>
</main>


<?php include $path . 'components/footer.php';?>