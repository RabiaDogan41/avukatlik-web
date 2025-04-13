<?php
session_start();
include 'config.php';

// Oturum zaman aşımı süresi (saniye cinsinden)
$timeout_duration = 60; // 1dk

// Oturum süresi kontrolü
if (isset($_SESSION['last_activity'])) {
    if (time() - $_SESSION['last_activity'] > $timeout_duration) {
        // Oturum zaman aşımına uğradı
        session_unset();
        session_destroy();
        header("Location: login.php"); // Kullanıcıyı giriş sayfasına yönlendirin
        exit;
    }
}

// Kullanıcı etkinlik zamanını güncelleyin
$_SESSION['last_activity'] = time();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kullanıcı doğrula
    $stmt = $db->prepare("SELECT * FROM admin_users WHERE username = ?");
    $stmt->execute([$username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Oturum başlat
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $username; // Kullanıcı adını oturumda sakla
        $_SESSION['last_activity'] = time(); // Oturum başlangıç zamanını ayarla
        header("Location: admin.php");
        exit;
    } else {
        $error = "Kullanıcı adı veya şifre hatalı!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş yap</title>
    <link rel="stylesheet" href="style/style.php">

</head>
<body style="background-image: url(images/login.jpg); background-size: cover; background-position: center; display: flex;
    align-items: center;
    justify-content: center;">
<div class="login-container">
    <h1>Giriş Yap</h1>
    <?php if (isset($error)): ?>
        <p class="error-message"><?= htmlspecialchars($error) ?></p>
    <?php endif; ?>
    <form method="POST">
        <input type="text" id="username" name="username" placeholder="Kullanıcı Adı" style="background-color: transparent; border-radius:10rem;"required>
        <input type="password" id="password" name="password" placeholder="Şifre" required>
        <button type="submit">Giriş Yap</button>
    </form>
</div>

</body>
</html>
