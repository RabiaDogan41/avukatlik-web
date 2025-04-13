<?php
include 'config.php'; // Veritabanı bağlantısı

// Yeni kullanıcı bilgileri
$username = 'adminannacrabia'; // Buraya kullanıcı adını yaz
$password = 'RabiaAvAnnac2772.'; // Buraya şifreyi yaz

// Şifreyi hashle
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

try {
    // Kullanıcıyı veritabanına ekle
    $stmt = $db->prepare("INSERT INTO admin_users (username, password) VALUES (?, ?)");
    $stmt->execute([$username, $hashed_password]);

    echo "Kullanıcı başarıyla eklendi!";
} catch (PDOException $e) {
    echo "Kullanıcı eklenirken bir hata oluştu: " . $e->getMessage();
}
?>
