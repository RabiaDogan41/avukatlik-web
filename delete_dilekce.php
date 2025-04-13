<?php
include 'config.php'; // Veritabanı bağlantısı

$id = $_GET['id'];
$stmt = $db->prepare("DELETE FROM dilekceler WHERE id = ?");
$stmt->execute([$id]);

header("Location: manage_dilekceler.php");
exit;
?>
