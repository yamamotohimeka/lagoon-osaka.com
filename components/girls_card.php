<?php

require(dirname(__FILE__)."/../hooks/girl.php");

foreach($girls as $girl):?>

<li class="
    girlCard fadeIn1
    <?php if ($templete !== 'girls'){ echo 'none'; } ?>
    <?php if($girl['sun']) echo 'Sun';?>
    <?php if($girl['mon']) echo 'Mon';?>
    <?php if($girl['tue']) echo 'Tue';?>
    <?php if($girl['wed']) echo 'Wed';?>
    <?php if($girl['thu']) echo 'Thu';?>
    <?php if($girl['fri']) echo 'Fri';?>
    <?php if($girl['sat']) echo 'Sat';?>
    ">

  <div class="girlCard-frame">
    <div class="girlCard-frame-flex">
      <?php if ($templete !== 'girls') :?>
      <p class="girlCard-time">
        <?php echo $girl['time'];?>
      </p>
      <?php endif; ?>

      <div class="girlCard-img">
        <img src="./assets/img/<?php echo $girl['img'];?>.png" alt="ラグーンの女の子の画像">
      </div>
      <?php if ($templete !== 'girl') :?>
      <p class="girlCard-info-store-time"> <img src="./assets/img/clock.png" alt=""><?php echo $girl['time'];?></p>
      <?php endif; ?>
      <div class="girlCard-info-box">
        <?php if ($girl['newface']): ?>
        <img class="mark" src="./assets/img/newface.png" alt="新人マーク">
        <?php endif; ?>
        <div class="girlCard-info-name">
          <h3><?php echo $girl['name'];?></h3>
          <p>(<?php echo $girl['age'];?>)</p>
        </div>
        <div class="girlCard-info-size">
          <p>T<?php echo $girl['tall'];?> B<?php echo $girl['bust'];?> W<?php echo $girl['waist'];?>
            H<?php echo $girl['height'];?></p>
        </div>
      </div>
      <div class="girlCard-type">
        <p><?php echo $girl['tag1'];?></p>
        <p><?php echo $girl['tag2'];?></p>
      </div>
    </div>
  </div>
</li>
<?php
endforeach;
?>