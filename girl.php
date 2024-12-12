<?php
$path = './';
$title = '女の子一覧';
$templete = 'girl';
include $path . 'components/header.php';

// 女の子データを取得
require_once dirname(__FILE__) . '/hooks/girl.php';

// ページネーション設定
$itemsPerPage = 16; // 1ページあたりの表示件数
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1; // 現在のページ番号
$totalItems = count($girls); // データの総数
$totalPages = ceil($totalItems / $itemsPerPage); // 総ページ数

// 現在のページに表示するデータを取得
$startIndex = ($currentPage - 1) * $itemsPerPage;
$displayGirls = array_slice($girls, $startIndex, $itemsPerPage);
?>

<main class="girl">
  <div class="container">
    <div class="section-title">
      <h2>女の子一覧</h2>
    </div>
    <div class="girl__list">
      <ul class="cast__box__list grid">
        <?php
        // girls_card.php に現在のページ用データを渡す
        $girlsForCurrentPage = $displayGirls; // 現在のページのデータを別変数に格納
        include $path . 'components/girls_card.php';
        ?>
      </ul>

      <!-- ページネーション -->
      <div class="pagination">
        <?php if ($totalPages > 1): ?>
        <?php if ($currentPage > 1): ?>
        <a href="?page=<?php echo $currentPage - 1; ?>">前の女の子へ</a>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <a href="?page=<?php echo $i; ?>" class="<?php echo $i === $currentPage ? 'active' : ''; ?>">
          <?php echo $i; ?>
        </a>
        <?php endfor; ?>

        <?php if ($currentPage < $totalPages): ?>
        <a href="?page=<?php echo $currentPage + 1; ?>">次の女の子へ</a>
        <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>

<?php include $path . 'components/footer.php'; ?>