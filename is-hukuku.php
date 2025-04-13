<?php
include 'config.php';

// İletişim bilgilerini çek
$stmt = $db->query("SELECT * FROM contact_info WHERE id = 1");
$contact = $stmt->fetch();

$stmt = $db->query("SELECT title, content FROM footer_warnings WHERE id = 1");
$footer_warning = $stmt->fetch(PDO::FETCH_ASSOC);
?>





<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=League+Script&family=Playwrite+HU:wght@100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="style/style.php">
  <meta name="google-translate-customization" content="id">
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
          pageLanguage: 'tr',
          includedLanguages: 'en,fr,de,ar,es', // Desteklenen diller
          layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        },
        'google_translate_element'
      );
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>


  <title>Avukatlık Hizmetleri - Hukuk Makaleleri ve Dilekçe Örnekleri</title>
  <meta name="description" content="Avukatlık hizmetleri, hukuk makaleleri, dilekçe örnekleri ve yasal çözümler sunan profesyonel bir hukuk platformu.">
  <meta name="keywords" content="avukat, hukuk, ceza hukuku, aile hukuku, ticaret hukuku, dilekçe örnekleri, hukuk danışmanlığı, yasal işlemler, avukatlık bürosu, dava, tazminat hukuku, miras hukuku, gayrimenkul hukuku">
  <meta name="author" content="Rabia Annaç">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header>
    <div class="logo">
      <a href="index.php"><img src="images/logo.png" alt="logo" /></a>
    </div>
    <div class="navbar">
      <ul>
        <li><a href="index.php">Anasayfa</a></li>
        <li><a href="hakkimizda.php">Hakkımızda</a></li>
        <li><a href="makaleler.php">Makaleler</a></li>
        <li><a href="dilekce-ornekleri.php">Dilekçe Örnekleri</a></li>
        <li><a href="iletisim.php">İletişim</a></li>
      </ul>
    </div>
    <div class="menu-icon">
      <a href="#"><i class="fa-solid fa-bars"></i></a>
    </div>
  </header>

  <section class="miras-hukuku">
    <div class="miras-container">
      <div class="miras-image">
        <img src="images/is-hukuku.png" alt="iş Hukuku" />
      </div>
      <div class="miras-content">
        <h2>İş Hukuku</h2>
        <p>
          İş hukuku, işçi ve işveren arasındaki ilişkileri düzenleyen ve
          tarafların haklarını korumayı amaçlayan bir hukuk dalıdır. Türk İş
          Kanunu kapsamında iş sözleşmeleri, çalışma şartları, işten çıkarma,
          tazminat ve iş güvenliği gibi konular ele alınmaktadır. İşçi
          haklarının korunması ve işverenin yükümlülüklerinin yerine
          getirilmesi sürecinde hukuki destek büyük önem taşır.
        </p>

        <h3><br />İşçi Alacak Davaları</h3>
        <p>
          İşçinin çalışması karşılığında hak ettiği ücret, fazla mesai, yıllık
          izin ücreti, kıdem tazminatı ve ihbar tazminatı gibi hakların
          işverence ödenmemesi durumunda dava açılabilir. Tarafımdan, işçi
          alacaklarının tahsil edilmesi için titiz bir çalışma yürütülmekte,
          haklarınızın korunması sağlanmaktadır.
        </p>

        <h3><br />İşten Çıkarma ve Tazminat Davaları</h3>
        <p>
          İşten çıkarılma süreci, hem işçi hem de işveren açısından yasal
          düzenlemelere uygun olmak zorundadır. Haksız veya geçersiz işten
          çıkarmalar durumunda, işe iade davası açılabilir. Kıdem ve ihbar
          tazminatlarının tahsili, bu süreçte önemli bir konudur. Tarafımca,
          işten çıkarma ve tazminat davaları profesyonel şekilde takip
          edilmektedir.
        </p>

        <h3><br />Fazla Mesai ve Hak Edilen Ücretler</h3>
        <p>
          İş Kanunu’na göre, işçinin fazla çalışma yapması durumunda ek ücret
          alması gerekmektedir. Fazla mesai ücretlerinin ödenmemesi veya eksik
          hesaplanması durumunda dava açılabilir. Ayrıca, maaşların eksik
          ödenmesi gibi işçinin hak kaybına uğradığı tüm durumlarda, gerekli
          hukuki adımlar atılmaktadır.
        </p>

        <h3><br />İşe İade Davaları</h3>
        <p>
          Geçersiz veya haksız nedenle işten çıkarılan işçilerin, işlerine
          geri dönme hakları bulunmaktadır. İşe iade davalarında, sürelerin
          doğru takip edilmesi ve delillerin eksiksiz sunulması büyük önem
          taşır. Bu süreçte hak kayıplarının önlenmesi adına tarafımca etkin
          bir savunma yürütülmektedir.
        </p>

        <h3><br />İş Kazaları ve Meslek Hastalıkları</h3>
        <p>
          İş kazaları ve meslek hastalıkları, işverenin iş sağlığı ve
          güvenliği yükümlülüklerini yerine getirmediği durumlarda ortaya
          çıkar. İşçinin uğradığı zararların tazmini, maddi ve manevi tazminat
          davaları yoluyla talep edilebilir. Bu süreçte, mağduriyetin
          giderilmesi için hukuki destek sağlıyorum.
        </p>

        <h3><br />İş Hukuku Alanında Profesyonel Destek</h3>
        <p>
          İş hukuku davaları, hem işçi hem de işveren açısından hak
          kayıplarını önlemek için titizlikle yürütülmesi gereken süreçlerdir.
          Tarafımdan sunulan hizmet, iş sözleşmelerinin hazırlanması, işçi
          haklarının korunması ve uyuşmazlıkların çözümünde güvenilir bir
          destek sağlamaktadır. Süreç boyunca haklarınızı korumak ve adaletin
          sağlanması adına yanınızda yer almaktayım.
        </p>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-container">
      <!-- Left Footer -->
      <div class="left-footer">
        <h3>Benimle İletişime Geçin</h3>
        <p>Adres: <span class="contact-text"><?= htmlspecialchars($contact['address']) ?></span></p>
        <p>Telefon: <span class="contact-text"><?= htmlspecialchars($contact['phone']) ?></span></p>
        <p>Email: <span class="contact-text"><?= htmlspecialchars($contact['email']) ?></span></p>
        <p class="small-text">© 2024 - istecse </p>
      </div>
      <!-- Right Footer -->
      <div class="right-footer">
        <h3><?= htmlspecialchars($footer_warning['title']); ?></h3>
        <p>
          <?= htmlspecialchars($footer_warning['content']); ?>
        </p>
      </div>
    </div>
  </footer>


  <script src="script.js"></script>
</body>

</html>