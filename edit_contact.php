<?php
include 'config.php'; // Veritabanı bağlantısı
include 'config/session_check.php';

// Mevcut iletişim bilgilerini çek
$stmt = $db->query("SELECT * FROM contact_info WHERE id = 1");
$contact = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $map_url = $_POST['map_url'];

    // Veritabanını güncelle
    $stmt = $db->prepare("UPDATE contact_info SET phone = ?, email = ?, address = ?, map_url = ? WHERE id = 1");
    $stmt->execute([$phone, $email, $address, $map_url]);

    $success = "İletişim bilgileri başarıyla güncellendi!";
    header("Location: edit_contact.php?success=true");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <<link rel="stylesheet" href="style/style.php">

    <title>İletişim Bilgilerini Düzenle</title>
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
    <div class="edit-contact-container">
        <h1>İletişim Bilgilerini Düzenle</h1>
        <?php if (isset($_GET['success'])): ?>
            <p class="success-message">İletişim bilgileri başarıyla güncellendi!</p>
        <?php endif; ?>
        <form method="POST">
            <label for="phone">Telefon:</label>
            <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($contact['phone']); ?>" required>

            <label for="email">E-posta:</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($contact['email']); ?>" required>

            <label for="address">Adres:</label>
            <textarea id="address" name="address" rows="3" required><?= htmlspecialchars($contact['address']); ?></textarea>

            <label for="map_url">Google Harita URL:</label>
            <input type="text" id="map_url" name="map_url" value="<?= htmlspecialchars($contact['map_url']); ?>" required>

            <button type="submit">Kaydet</button>
            <a href="admin.php" class="back-button">Geri</a>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
