<?php
include 'config.php'; // Veritabanı bağlantısı
include 'config/session_check.php';

// Makaleleri çek
$query = "SELECT * FROM posts ORDER BY post_date DESC";
$result = $db->query($query);

if (!$result) {
    die("Veritabanı hatası: " . $db->errorInfo()[2]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.php">

    <title>Makaleleri Düzenle</title>
</head>
<body style="overflow-x: hidden; background-image: url('images/others.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;"></body>
<div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <h2>Yönetici İşlemleri</h2>
            <ul>
                <li style="font-size:1.3rem;">Düzenleme İşlemleri</li>
                <li><a href="post.php">- Makale Ekle</a></li>
                <li><a href="manage_posts.php">- Makaleleri Düzenle</a></li>
                <li><a href="post_dilekce.php">- Dilekçe Ekle</a></li>
                <li><a href="manage_dilekceler.php">- Dilekçeleri Düzenle</a></li>
                <li><a href="logout.php">- Çıkış Yap</a></li>

            </ul>
        </aside>

        <!-- Menü İkonu -->
        <div class="menu-icon2">
            <span></span>
            <span></span>
            <span></span>
        </div>
</div>

    <div class="manage-posts-container">
    <h1>Makaleleri Düzenle</h1>
    <?php while ($article = $result->fetch(PDO::FETCH_ASSOC)): ?>
        <div class="post-item">
            <h2><?= htmlspecialchars($article['title']); ?></h2>
            <p><?= htmlspecialchars(substr($article['content'], 0, 150)) . '...'; ?></p>
            <div class="post-actions">
                <a href="edit_post.php?id=<?= $article['post_id']; ?>" class="edit-button">Düzenle</a>
                <a href="delete_post.php?id=<?= $article['post_id']; ?>" class="delete-button">Sil</a>

            </div>
        </div>
    <?php endwhile; ?>
</div>

<div class="modal" id="deleteModal">
    <div class="modal-content">
        <h2>Silmek istediğinizden emin misiniz?</h2>
        <div class="modal-actions">
            <button id="confirmDelete" class="confirm-button">Evet</button>
            <button id="cancelDelete" class="cancel-button">Hayır</button>
        </div>
    </div>
</div>

    <script src="script.js"></script>
</body>
</html>
