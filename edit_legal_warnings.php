<?php
include 'config.php'; // Veritabanı bağlantısı

// Güncelleme işlemi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = intval($_POST['id']);
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $db->prepare("UPDATE legal_warnings2 SET title = ?, content = ? WHERE id = ?");
    $stmt->execute([$title, $content, $id]);

    $message = "Yasal uyarı başarıyla güncellendi!";
}

// Mevcut içerikleri çek
$stmt = $db->prepare("SELECT * FROM legal_warnings2 LIMIT 1");
$stmt->execute();
$legal_warning = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$legal_warning) {
    die("Yasal uyarılar bulunamadı!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.php">
    <title>Yasal Uyarıları Düzenle</title>
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
    <h1>Yasal Uyarıları Düzenle</h1>
    <?php if (isset($message)): ?>
        <p class="success-message"><?= htmlspecialchars($message); ?></p>
    <?php endif; ?>
    <form method="POST">
        <input type="hidden" name="id" value="<?= htmlspecialchars($legal_warning['id']); ?>">
        <label for="title">Başlık:</label>
        <input type="text" id="title" name="title" value="<?= htmlspecialchars($legal_warning['title']); ?>" required>
        
        <label for="content">İçerik:</label>
        <textarea id="content" name="content" rows="8" required><?= htmlspecialchars($legal_warning['content']); ?></textarea>
        
        <button type="submit">Güncelle</button>
    </form>
</div>
<script src="script.js"></script>
</body>
</html>
