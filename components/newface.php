<?php require(dirname(__FILE__)."/../hooks/girl.php");
      foreach($girls as $girl):
      if ($girl['newface']): ?>


<li class="newfaceCard">
  <div class="girlCard-frame">

    <div class="newfaceCard-flex">
      <div class="newfaceCard-date">
        <?php
            // 今日の日付を取得
            $today = new DateTime();
            // 過去2か月前の日付を取得
            $twoMonthsAgo = (clone $today)->modify('-2 months');

            // ランダムな日付を生成
            $randomTimestamp = mt_rand($twoMonthsAgo->getTimestamp(), $today->getTimestamp());
            $randomDate = date('Y.m.d', $randomTimestamp); // フォーマットして日付を取得
            ?>
        <p>入店日 <?php echo $randomDate; ?></p> <!-- ランダムな日付を表示 -->
      </div>
      <div class="girlCard-img">
        <img src="<?php echo $path; ?>/assets/img/<?php echo $girl['img'];?>.png" alt="ラグーンの女の子の画像">
      </div>
      <div class="girlCard-info-box">
        <?php if ($girl['newface']): ?>
        <img class="mark" src="<?php echo $path; ?>/assets/img/newface.png" alt="新人マーク">
        <?php endif; ?>
      </div>
    </div>
    <div class="newfaceCard-info">
      <p class="girlCard-name">
        <?php echo $girl['name'];?> (<?php echo $girl['age'];?>)
      </p>

      <div class="newfaceCard-info-flex">
        <p class="girlCard-size">
          T<?php echo $girl['tall'];?>/B<?php echo $girl['bust'];?>.W<?php echo $girl['waist'];?>.H<?php echo $girl['height'];?>
        </p>
        <div class="girlCard-type">
          <p><?php echo $girl['tag1'];?></p>
          <p><?php echo $girl['tag2'];?></p>
        </div>

        <div class="newfaceCard-fee">
          <p>指名料 <?php echo $girl['reserve'];?>円</p>
        </div>
      </div>
      <div class="newfaceCard-description">
        <p><?php echo $girl['description'];?></p>
      </div>
    </div>
  </div>
</li>

<?php endif; ?>
<?php endforeach;?>