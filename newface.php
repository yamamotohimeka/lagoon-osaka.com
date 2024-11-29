<?php
$path = './';
$title = '新人情報';
$templete = 'newface';
include $path . 'components/header.php';
?><main class="newface">

  <div class="container">
    <div class="section-title">
      <h2>新人情報</h2>
    </div>
    <ul class="newface__list">
      <?php include $path . 'components/newface.php';?>
    </ul>
  </div>

</main>
<?php include $path . 'components/footer.php';?>