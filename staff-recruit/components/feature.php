<section class="feature" id="feature">
  <div class="container">

    <?php
    $features = [
      [
        'title' => '未経験大歓迎',
        'desc' => '18歳以上（高校生不可）のやる気に満ちた方を求めています！<br>
                  20代の若手スタッフも活躍中！学歴や経験は一切問いません。<br>
                  やる気のある方はどんどんご応募ください！
                  '
      ],
      [
        'title' => '1日1万円まで日払い可能',
        'desc' => 'お給料は日払いが可能です!<br>
                  面接のあと、スムーズにいけば最短で翌日から勤務が可能。<br>
                  スタッフ急募しておりますので、お気軽にご応募ください！
                  '
      ],
      [
        'title' => '他府県への転勤なし',
        'desc' => '店舗は全て大阪市内にありますので、市内での勤務になります！ <br>
                  希望エリアを聞きながら配属店舗を決めさせていただきますので、<br>
                  勤務エリアはご相談くださいませ！
                  '
      ],
    ];

    foreach ($features as $feature): ?>
      <section class="feature__section fadeIn1">
        <div class="feature__section--text">
          <p class="featureTitle">
            <?php echo $feature['title']; ?>
          </p>
          <p class="featureDesc">
            <?php echo $feature['desc']; ?>
          </p>
        </div>
        <div class="feature__section--border">
          <img src="<?php echo $path; ?>assets/img/featureBorder.webp" alt="">
        </div>
      </section>
    <?php endforeach; ?>

  </div>
</section>