<?php
$path = './';
$title = '女の子一覧';
$templete = 'girls';
include $path . 'components/header.php';


?>
<main class="girl">
  <div class="container">
    <div class="section-title">
      <h2>女の子一覧</h2>
    </div>
    <div class="girl__list">
      <ul class="cast__box__list grid">
        <?php include $path . 'components/girls_card.php';?>
      </ul>
      <?php
$totalData = 32; 
$totalPages = ceil($totalData / 16); 

$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; 

$offset = ($currentPage - 1) * 16; 
      ?>
      <div class="pagination">
        <?php if ($currentPage > 1): ?>
        <a href="girl.php">前の女の子へ</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?php echo $i; ?>" class="<?php echo $i === $currentPage ? 'active' : ''; ?>">
          <?php echo $i; ?>
        </a>
        <?php if ($i < $totalPages): ?>
        |
        <?php endif; ?>
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">次の女の子へ</a>
        <?php endif; ?>
      </div>
    </div>

  </div>
  </div>
  </div>
  <div id="page-top" class="mouse_footer">
  </div>
</main>
<?php include $path . 'components/footer.php';?>