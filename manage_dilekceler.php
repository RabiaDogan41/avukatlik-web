<?php
include 'config.php'; // Veritabanı bağlantısı
include 'config/session_check.php';

// Dilekçeleri çek
$query = "SELECT * FROM dilekceler ORDER BY yukleme_tarihi DESC";
$result = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.php">

    <title>Dilekçeleri Yönet</title>
</head>
<body style="overflow-x: hidden; background-image: url('images/others.jpg'); background-position: center; background-repeat: no-repeat; background-size: cover;">

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
    <h1>Dilekçeleri Düzenle</h1>
    <?php while ($dilekce = $result->fetch(PDO::FETCH_ASSOC)): ?>
        <div class="post-item">
            <h2><?= htmlspecialchars($dilekce['baslik']); ?></h2>
            <p><?= htmlspecialchars(substr($dilekce['icerik'], 0, 150)) . '...'; ?></p>
            <div class="post-actions">
                <a href="edit_dilekce.php?id=<?= $dilekce['id']; ?>" class="edit-button">Düzenle</a>
                <a href="delete_dilekce.php?id=<?= $dilekce['id']; ?>" class="delete-button">Sil</a>
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
