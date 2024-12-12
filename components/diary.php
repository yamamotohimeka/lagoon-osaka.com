<?php
session_start();

// 日記データの読み込み（例：$diarys 配列があると仮定）
require(dirname(__FILE__) . '/../hooks/diary.php'); // $diarysを読み込む

// 現在の時間を取得（例：20241212 14時）
$currentHour = date('YmdH'); // 例: 20241212 14

// キャッシュキーを設定（例：2024年12月12日14時）
$cacheKey = 'diary_order';

// キャッシュを取得
function get_cache($key) {
    return isset($_SESSION[$key]) ? $_SESSION[$key] : null; // セッションからキャッシュを取得
}

// キャッシュを保存
function set_cache($key, $value) {
    $_SESSION[$key] = $value; // セッションにキャッシュを保存
}

// キャッシュされた順番がない場合にランダム化してキャッシュに保存
if (!get_cache($cacheKey)) {
    shuffle($diarys); // 日記の順番をランダム化
    set_cache($cacheKey, $diarys); // キャッシュに保存
    
}

// キャッシュから順番を取得
$diarysToDisplay = get_cache($cacheKey);

// セッションに日時キャッシュがあるか確認
if (!isset($_SESSION['diarys_dates'])) {
    $baseTime = time(); // 現在時刻を基準にする
    $dates = [];

    // 各投稿の日時を生成
    foreach ($diarys as $index => $diary) {
        // 最初の投稿は現在時刻、以降はランダムな間隔で減少
        if ($index === 0) {
            $dateTimestamp = $baseTime;
        } else {
            // 30分～2時間（1800秒～7200秒）のランダム間隔
            $timeOffset = rand(3800, 18200);
            $dateTimestamp -= $timeOffset;
        }

        // フォーマット：2024年12月12日 22:24
        $dates[] = date('Y年m月d日 H:i', $dateTimestamp);
    }

    // キャッシュする
    $_SESSION['diarys_dates'] = $dates;
} else {
    $dates = $_SESSION['diarys_dates'];
}

// ページネーション設定
$itemsPerPage = ($templete === 'top') ? 4 : 9; // $templete が 'top' の場合は4件表示
$totalItems = count($diarysToDisplay); // 全投稿数
$totalPages = ceil($totalItems / $itemsPerPage); // 総ページ数

// 現在のページ番号を取得
$currentPage = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$currentPage = max(1, min($currentPage, $totalPages)); // ページ番号のバリデーション

// 表示するデータの範囲を決定
$startIndex = ($currentPage - 1) * $itemsPerPage;
$paginatedDiaries = array_slice($diarysToDisplay, $startIndex, $itemsPerPage);
$paginatedDates = array_slice($dates, $startIndex, $itemsPerPage);
?>

<!-- HTML部分 -->
<?php foreach ($paginatedDiaries as $index => $diary): ?>
<li class="diary">
  <div class="diary-header">
    <p class="diary-name"><?php echo htmlspecialchars($diary['name']); ?></p>
    <p class="diary-date"><?php echo htmlspecialchars($paginatedDates[$index]); ?></p> <!-- 日時の表示 -->
  </div>
  <div class="diary-img <?php echo ($diary['diary-img'] === 'secret') ? 'login' : ''; ?>">
    <img src="./assets/img/<?php echo htmlspecialchars($diary['diary-img']); ?>.png" alt="画像">
  </div>

  <div class="diary-text">
    <p><?php echo nl2br($diary['diary-text']); ?></p>
  </div>



</li>
<?php endforeach; ?>