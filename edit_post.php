<?php
include 'config.php'; // Veritabanı bağlantısı
include 'config/session_check.php';

$id = $_GET['id'];
$query = "SELECT * FROM posts WHERE post_id = ?";
$stmt = $db->prepare($query);
$stmt->execute([$id]);
$post = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $post['image']; // Mevcut resmi koru

    // Yeni resim yüklendiyse
    if (!empty($_FILES['image']['name'])) {
        $targetDir = "uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $image = $targetDir . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    }

    // Veritabanını güncelle
    $updateQuery = "UPDATE posts SET title = ?, content = ?, image = ? WHERE post_id = ?";
    $stmt = $db->prepare($updateQuery);
    $stmt->execute([$title, $content, $image, $id]);

    $success = "Makale başarıyla güncellendi!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.php">

    <title>Makale Düzenle</title>
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
        </aside>>

    
        <!-- Menü İkonu -->
        <div class="menu-icon2">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>



    <div class="edit-post-container">
        <h1>Makale Düzenle</h1>
        <?php if (isset($success)): ?>
            <p class="success-message"><?= htmlspecialchars($success); ?></p>
        <?php endif; ?>
        <form method="POST" enctype="multipart/form-data">
            <label for="title">Başlık:</label>
            <input type="text" id="title" name="title" value="<?= htmlspecialchars($post['title']); ?>" required>
            
            <label for="content">İçerik:</label>
            <textarea id="content" name="content" rows="5" required><?= htmlspecialchars($post['content']); ?></textarea>
            
            <label for="image">Görsel:</label>
        <input type="file" id="image" name="image" accept="image/*">
        
        <div class="current-image-container">
            <label>Mevcut Görsel:</label>
            <div class="current-image">
                <img src="<?= htmlspecialchars($post['image']); ?>" alt="Makale Görseli">
            </div>
        </div>
            
            <button type="submit">Kaydet</button>
            <a href="manage_posts.php" class="back-button">Geri</a>
        </form>
    </div>

    
    <script src="script.js"></script>
</body>
</html>
