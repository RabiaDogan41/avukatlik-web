<?php
include 'config.php'; // Veritabanı bağlantısı
include 'config/session_check.php';

$id = $_GET['id'];
$stmt = $db->prepare("SELECT * FROM dilekceler WHERE id = ?");
$stmt->execute([$id]);
$dilekce = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $baslik = $_POST['baslik'];
    $icerik = $_POST['icerik'];
    $dosya_yolu = $dilekce['dosya_yolu'];

    if (!empty($_FILES['dosya']['name'])) {
        $targetDir = "uploads/";
        $dosya_yolu = $targetDir . basename($_FILES['dosya']['name']);
        move_uploaded_file($_FILES['dosya']['tmp_name'], $dosya_yolu);
    }

    $stmt = $db->prepare("UPDATE dilekceler SET baslik = ?, icerik = ?, dosya_yolu = ?, yukleme_tarihi = NOW() WHERE id = ?");
    $stmt->execute([$baslik, $icerik, $dosya_yolu, $id]);
    header("Location: manage_dilekceler.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.php">

    <title>Dilekçe Düzenle</title>
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
<div class="edit-post-container">
    <h1>Dilekçe Düzenle</h1>
    <form method="POST" enctype="multipart/form-data">
        <label for="baslik">Başlık:</label>
        <input type="text" id="baslik" name="baslik" value="<?= htmlspecialchars($dilekce['baslik']); ?>" required>

        <label for="icerik">İçerik:</label>
        <textarea id="icerik" name="icerik" rows="5" required><?= htmlspecialchars($dilekce['icerik']); ?></textarea>

        <label for="dosya">Dosya Yükle:</label>
        <input type="file" id="dosya" name="dosya" accept=".pdf">
        <p>Mevcut Dosya: <a href="<?= htmlspecialchars($dilekce['dosya_yolu']); ?>" target="_blank">Görüntüle</a></p>

        <button type="submit">Kaydet</button>
        <a href="manage_dilekceler.php" class="back-button">Geri</a>
    </form>
</div>
<script src="script.js"></script>
</body>
</html>
