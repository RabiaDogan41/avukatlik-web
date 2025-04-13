<?php
include 'config.php'; // Veritabanı bağlantısı
include 'config/session_check.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $baslik = $_POST['baslik'];
    $icerik = $_POST['icerik'];
    $dosya_yolu = '';

    // Dosya yükleme işlemi
    if (!empty($_FILES['dosya']['name'])) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $dosya_yolu = $targetDir . basename($_FILES['dosya']['name']);
        if (!move_uploaded_file($_FILES['dosya']['tmp_name'], $dosya_yolu)) {
            $error = "Dosya yükleme sırasında bir hata oluştu.";
        }
    }

    // Veritabanına ekle
    if (!isset($error)) {
        $stmt = $db->prepare("INSERT INTO dilekceler (baslik, icerik, dosya_yolu, yukleme_tarihi) VALUES (?, ?, ?, NOW())");
        $stmt->execute([$baslik, $icerik, $dosya_yolu]);
        $success = "Dilekçeniz başarıyla eklendi!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.php">

    <title>Dilekçe Ekle</title>
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
<div class="post-form-container">
    <h1>Dilekçe Ekle</h1>
    <?php if (isset($success)): ?>
        <p class="success-message"><?= htmlspecialchars($success); ?></p>
    <?php elseif (isset($error)): ?>
        <p class="error-message"><?= htmlspecialchars($error); ?></p>
    <?php endif; ?>
    <form method="POST" enctype="multipart/form-data">
        <label for="baslik">Başlık:</label>
        <input type="text" id="baslik" name="baslik" required>

        <label for="icerik">İçerik:</label>
        <textarea id="icerik" name="icerik" rows="5" required></textarea>

        <label for="dosya">Dosya Yükle:</label>
        <input type="file" id="dosya" name="dosya" accept=".pdf">

        <button type="submit">Ekle</button>
        <a href="manage_dilekceler.php" class="back-button">Geri</a>
    </form>
</div>
<script src="script.js"></script>
</body>
</html>
