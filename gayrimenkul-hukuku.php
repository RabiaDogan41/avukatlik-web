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
        <img src="images/gayrimenkul-hukuku.png" alt="gayrimenkul-hukuku" />
      </div>
      <div class="miras-content">
        <h2>Gayrimenkul Hukuku</h2>
        <p>
          Gayrimenkul hukuku, taşınmaz malların alımı, satımı, devri ve kullanımı gibi konuları düzenleyen bir hukuk dalıdır.
          Türk Medeni Kanunu ve ilgili yasal düzenlemeler çerçevesinde tapu işlemleri, kira sözleşmeleri, ipotek tesisleri ve
          taşınmazlarla ilgili tüm uyuşmazlıklarda hukuki güvence sağlamak büyük önem taşır.
          Taşınmazlara ilişkin işlemlerde hak kaybı yaşamamak için titiz bir hukuki destek gereklidir.
        </p>

        <h3><br>Tapu İşlemleri ve İptal Davaları</h3>
        <p>
          Tapu tescili, taşınmaz alım-satım işlemlerinin resmi olarak tamamlanmasını sağlar. Ancak tapuda yapılan hatalar,
          yolsuz tescil ya da muvazaalı işlemler nedeniyle tapu iptal ve tescil davaları gündeme gelebilir.
          Tapu işlemlerinin doğru ve güvenli bir şekilde gerçekleştirilmesi, hak kayıplarının önlenmesi adına büyük önem taşır.
          Bu süreçte hukuki destek sağlıyor, haklarınızı koruyorum.
        </p>

        <h3><br>Kira Hukuku ve Tahliye Davaları</h3>
        <p>
          Kiracı ve mal sahibi arasında yaşanan uyuşmazlıklar, kira sözleşmesi ihlalleri veya ödenmeyen kira bedelleri gibi
          durumlarda hukuki çözümler üretiyorum. Özellikle tahliye davaları ve kira tespit davalarının hızlı ve etkili bir
          şekilde yürütülmesi adına sürecin her aşamasında müvekkilime destek sağlıyorum.
        </p>

        <h3><br>Kamulaştırma Davaları</h3>
        <p>
          Kamu yararı gerekçesiyle taşınmazların kamulaştırılması durumunda, kamulaştırmanın iptali veya bedelinin artırılması
          amacıyla dava açılabilir. Kamulaştırma sürecinde taşınmaz sahiplerinin haklarının korunması ve adil bedelin tespit edilmesi
          için gerekli hukuki adımları atıyorum.
        </p>

        <h3><br>Kat Mülkiyeti ve Ortaklık Davaları</h3>
        <p>
          Apartman ve site yönetimlerinden doğan ihtilaflar, kat maliklerinin hakları ve yükümlülükleriyle ilgilidir.
          Kat mülkiyeti davaları ve ortaklığın giderilmesi davalarında tarafların haklarını koruyarak yasal süreçleri yönetiyorum.
          Ayrıca ortaklığın satış yolu ile sona erdirilmesi gibi konularda da destek sunuyorum.
        </p>

        <h3><br>İpotek ve Taşınmaz Rehni</h3>
        <p>
          Taşınmazların ipotek edilmesi veya üzerinde rehin tesis edilmesi, alacaklıların haklarının güvence altına alınmasını sağlar.
          Ancak ipotek ve rehin işlemleri sırasında yasal prosedürlerin eksiksiz yerine getirilmesi önemlidir.
          Hak kayıplarının önüne geçmek için taşınmaz rehni işlemlerini titizlikle takip ediyorum.
        </p>

        <h3><br>Gayrimenkul Hukuku Alanında Profesyonel Destek</h3>
        <p>
          Gayrimenkul alım-satımı, tapu iptali, kira davaları, kamulaştırma ve ipotek gibi tüm taşınmaz işlemlerinde,
          haklarınızın korunması ve yasal sürecin doğru şekilde yönetilmesi için profesyonel hukuki destek sunuyorum.
          Taşınmazlara ilişkin her türlü ihtilafta yanınızda yer alarak güvenilir çözümler üretiyorum.
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