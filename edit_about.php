<?php
include 'config.php';
include 'config/session_check.php';

// Mevcut bilgileri çek
$stmt = $db->query("SELECT * FROM about_us WHERE id = 1");
$about = $stmt->fetch();

// Form gönderimi kontrolü
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $about['image'];

    // Yeni resim yüklendiyse
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        $image = $targetDir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    // Veritabanını güncelle
    $stmt = $db->prepare("UPDATE about_us SET title = ?, content = ?, image = ?, updated_at = NOW() WHERE id = 1");
    $stmt->execute([$title, $content, $image]);

    $success = "Hakkımızda bilgileri başarıyla güncellendi!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.php">

    <title>Hakkımızda Güncelle</title>
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
                <li><a href="edit_contact.php">- İletişim bilgilerini düzenle</a></li>
                <li><a href="edit_about.php">- Fotoğraf ve Kişisel bilgileri düzenle</a></li>
                <li><a href="edit_legal_warnings.php">- Yasal Uyarıları Düzenle</a></li>
                <li><a href="edit_footer_warning.php">- Footer Yasal Uyarıyı Düzenle</a></li>
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
    <div class="edit-about-container">
        <h1>Hakkımızda Güncelle</h1>
        <?php if (isset($success)): ?>
            <p class="success-message"><?= htmlspecialchars($success); ?></p>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data">
            <label for="title">Başlık:</label>
            <input type="text" id="title" name="title" value="<?= htmlspecialchars($about['title']); ?>" required>

            <label for="content">İçerik:</label>
            <textarea id="content" name="content" rows="5" required><?= htmlspecialchars($about['content']); ?></textarea>

            <label for="image">Profil Resmi:</label>
            <input type="file" id="image" name="image" accept="image/*">
            <p>Mevcut Görsel:</p>
            <img src="<?= $about['image']; ?>" alt="Mevcut Görsel" width="200">

            <button type="submit">Kaydet</button>
            <a href="admin.php" class="back-button">Geri</a>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
