<?php
include 'config.php'; // Veritabanı bağlantısı

$id = $_GET['id'];
$stmt = $db->prepare("DELETE FROM posts WHERE post_id = ?");
$stmt->execute([$id]);

header("Location: manage_posts.php");
exit;
?>
