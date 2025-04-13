<?php
include 'config.php'; // Veritabanı bağlantısı

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Veritabanını güncelle
    $stmt = $db->prepare("UPDATE footer_warnings SET title = ?, content = ? WHERE id = 1");
    if ($stmt->execute([$title, $content])) {
        $message = "Yasal uyarı başarıyla güncellendi.";
    } else {
        $message = "Yasal uyarı güncellenirken bir hata oluştu.";
    }
}

// Mevcut veriyi çek
$stmt = $db->query("SELECT title, content FROM footer_warnings WHERE id = 1");
$footer_warning = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.php">
    <title>Yasal Uyarıyı Düzenle</title>
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


    <div class="edit-container">
        <h1>Yasal Uyarıyı Düzenle</h1>
        <?php if ($message): ?>
            <p class="success-message"><?= htmlspecialchars($message); ?></p>
        <?php endif; ?>
        <form method="POST">
            <label for="title">Başlık:</label>
            <input type="text" id="title" name="title" value="<?= htmlspecialchars($footer_warning['title']); ?>" required>
            
            <label for="content">İçerik:</label>
            <textarea id="content" name="content" rows="8" required><?= htmlspecialchars($footer_warning['content']); ?></textarea>
            
            <button type="submit">Güncelle</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
