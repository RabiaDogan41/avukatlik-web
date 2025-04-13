<?php

// Veritabanı bağlantı bilgileri
$host = 'localhost';
$dbname = 'avukat';
$username = 'root';
$password = '';
$charset = 'utf8';
$collate = 'utf8_unicode_ci';

// PDO DSN ve bağlantı ayarları
$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_PERSISTENT => false,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE $collate"
];

try {
    // PDO bağlantısı oluşturuluyor ve $baglanti değişkenine atanıyor
    $baglanti = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
    // Bağlantı hatalarını yakala ve hata mesajını göster
    die('Veritabanı bağlantı hatası: ' . $e->getMessage());
}

$db = $baglanti; // Eski adıyla uyumlu hale getir
