<?php require(dirname(__FILE__)."/../hooks/girl.php");?>
<?php 
// ランダムな日付を生成する関数
function generateRandomDate() {
    $today = new DateTime();
    $randomDays = rand(0, 3); // 0から3日の間でランダムに選択
    $randomDate = clone $today;
    $randomDate->modify("-$randomDays days");
    $randomHour = rand(0, 23);
    $randomMinute = rand(0, 59);
    $randomDate->setTime($randomHour, $randomMinute);
    return $randomDate;
}

// $girls 配列にランダムな日付を追加
foreach ($girls as $index => $girl) {
    if ($girl['diary']) {
        $girls[$index]['randomDate'] = generateRandomDate();
    }
}

usort($girls, function($a, $b) {
    return $b['randomDate'] <=> $a['randomDate'];
});
?>



<?php 
      foreach($girls as $girl):
      if ($girl['diary']): ?>

<li class="diary">
  <div class="diary-name">
    <p><?php echo $girl['name'];?></p>
  </div>
  <div class="diary-date">
    <p><?php echo $girl['randomDate']->format('Y年n月j日 H:i'); ?></p>
  </div>
  <div class="diary-img <?php echo ($girl['diary-img'] === 'secret') ? 'login' : ''; ?>">
    <img src="./assets/img/<?php echo $girl['diary-img'];?>.png" alt="ラグーンの女の子の画像">
  </div>
  <div class="diary-text">
    <p><?php echo $girl['diary-text'];?></p>
  </div>
</li>

<?php endif; ?>
<?php endforeach;?>
<?php 
      foreach($girls as $girl):
      if ($girl['diary2']): ?>
<li class="diary">
  <div class="diary-name">
    <p><?php echo $girl['name'];?></p>
  </div>
  <div class="diary-date">
    <p><?php echo $girl['randomDate']->format('Y年n月j日 H:i'); ?></p>
  </div>
  <div class="diary-img <?php echo ($girl['diary2-img'] === 'secret') ? 'login' : ''; ?>">
    <img src="./assets/img/<?php echo $girl['diary2-img'];?>.png" alt="ラグーンの女の子の画像">
  </div>
  <div class="diary-text">
    <p><?php echo $girl['diary2-text'];?></p>
  </div>
</li>
<?php endif; ?>
<?php endforeach;?><?php 
      foreach($girls as $girl):
      if ($girl['diary3']): ?>
<li class="diary">
  <div class="diary-name">
    <p><?php echo $girl['name'];?></p>
  </div>
  <div class="diary-date">
    <p><?php echo $girl['randomDate']->format('Y年n月j日 H:i'); ?></p>
  </div>
  <div class="diary-img <?php echo ($girl['diary3-img'] === 'secret') ? 'login' : ''; ?>">
    <img src="./assets/img/<?php echo $girl['diary3-img'];?>.png" alt="ラグーンの女の子の画像">
  </div>
  <div class="diary-text">
    <p><?php echo $girl['diary3-text'];?></p>
  </div>
</li>
<?php endif; ?>
<?php endforeach;?>