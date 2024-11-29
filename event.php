<?php
$path = './';
$title = 'イベント';
$templete = 'event';
include $path . 'components/header.php';
?>
<main class="event">
  <div class="container">
    <div class="section-title">
      <h2>イベント情報</h2>
    </div>
    <div class="event__pink">
      <img class="fadeIn1" src="<?php echo $path; ?>assets/img/slide1.png" alt="">
      <div class="event__text-flex fadeIn1">
        <h3>大還元祭開催中!</h3>
        <span>全コース最大4000円OFF</span>
        <p>只今人気嬢続々出勤中!</p>
      </div>
    </div>
    <div class="event__green">
      <img class="fadeIn1" src="<?php echo $path; ?>assets/img/slide2.png" alt="">
      <div class="event__text-flex fadeIn1">
        <h3>新人割</h3>
        <span>全コース2000円OFF</span>
        <p>NEWマークがついている女の子限定</p>
      </div>
    </div>
</main>
<?php include $path . 'components/footer.php';?>