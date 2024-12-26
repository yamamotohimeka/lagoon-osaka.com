<section id="contact" class="contact scroll-point">
  <div class="contact__bg">
    <div class="container">
      <div class="contact__box">
        <h2 class="mincho">お問い合わせはコチラから</h2>

        <div class="pc">
          <div class="contact__box-item">
            <p>ラインで応募</p>
            <img src="<? echo $path; ?>assets/images/contact_line.png" alt="LINEQR">
            <p>LINE:ID lagoonkyujin</p>
          </div>

          <div class="contact__box-item">
            <p class="tel-text">電話で応募</p>
            <p>24時間365日女性スタッフが対応</p>
            <p><a href="tel:0120-947-854">0120-947-854</a></p>
          </div>
          <div class="contact__box-item">
            <p class="form-text">応募フォーム</p>
          </div>
        </div>

        <div class="tab">
          <div class="contact__box-tabwrap">
            <div class="contact__box-item">
              <img src="<? echo $path; ?>assets/images/LINE-icon.png" alt="LINE">
              <p>ラインで応募</p>
              <p class="line-text"><a href="https://line.me/ti/p/tWe4OQhxvt#~" target="_blank">友達追加する</a></p>
            </div>
            <div class="contact__box-item">
              <p class="tel-text">電話で応募</p>
              <p>24時間365日女性スタッフが対応</p>
              <p><a href="tel:0120-947-854">0120-947-854</a></p>
            </div>
            <div class="contact__box-item">
              <p class="form-text">応募フォーム</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="contact__bg2">
    <div class="container">
      <div class="contact__box2">
        <?php include $path .'php_mailer/form.php';?>
      </div>
    </div>
  </div>
</section>