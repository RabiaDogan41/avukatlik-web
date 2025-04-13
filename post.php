<?php
include 'config.php'; // Veritabanı bağlantısı
include 'config/session_check.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = '';

    // Resim yükleme işlemi
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        
        // `uploads` klasörünü kontrol et ve yoksa oluştur
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        
        $image = $targetDir . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $image)) {
            // Resim başarıyla yüklendi
        } else {
            $error = "Resim yükleme sırasında bir hata oluştu.";
        }
    }

    // Veritabanına ekle
    if (!isset($error)) {
        try {
            $stmt = $db->prepare("INSERT INTO posts (image, title, content, post_date) VALUES (?, ?, ?, NOW())");
            $stmt->execute([$image, $title, $content]);
            $success = "Makaleniz başarıyla paylaşıldı!";
        } catch (PDOException $e) {
            $error = "Veritabanı hatası: " . $e->getMessage();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.php">

    <title>Makale Ekle</title>
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
    <div class="post-form-container">
        <h1>Makale Ekle</h1>
        <?php if (isset($success)): ?>
            <p class="success-message"><?= htmlspecialchars($success); ?></p>
        <?php elseif (isset($error)): ?>
            <p class="error-message"><?= htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data">
            <label for="title">Başlık:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="content">İçerik:</label>
            <textarea id="content" name="content" rows="5" required></textarea>
            
            <label for="image">Görsel:</label>
            <input type="file" id="image" name="image" accept="image/*">
            
            <button type="submit">Paylaş</button>
            <a href="admin.php" class="back-button">Geri</a>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
