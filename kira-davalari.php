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
        <img src="images/kira-davalari.png" alt="Kira davaları" />
      </div>
      <div class="miras-content">
        <h2>Kira Davaları</h2>
        <p>
          Kira davaları, kiracı ve mal sahibi arasındaki hukuki uyuşmazlıkların çözümünü amaçlayan davalardır.
          Türk Borçlar Kanunu kapsamında düzenlenen kira ilişkileri, tarafların haklarının korunmasını sağlar.
          Ödenmeyen kiralar, tahliye talepleri, kira bedelinin tespiti ve sözleşme ihlalleri, kira davalarının temel konularını oluşturur.
          Bu süreçlerde, hem kiracıların hem de mal sahiplerinin haklarının korunması büyük önem taşır.
        </p>

        <h3><br>Kira Bedelinin Tespiti Davaları</h3>
        <p>
          Kira bedelinin fahiş artış göstermesi veya mevcut ekonomik koşullara uymaması durumunda, kira bedelinin tespiti davası açılabilir.
          Mahkeme, rayiç bedel ve emsal kira değerlerini dikkate alarak adil bir kira bedeli belirler.
          Kira bedelinin tespiti davalarında müvekkilimin haklarının korunması için gerekli hukuki desteği sağlıyorum.
        </p>

        <h3><br>Tahliye Davaları</h3>
        <p>
          Kiracının kira sözleşmesine aykırı davranması, kirayı ödememesi veya sözleşme süresinin sona ermesi gibi durumlarda tahliye davası açılabilir.
          Özellikle tahliye taahhütnamesine dayalı tahliye davaları hızlı sonuç veren yollardan biridir.
          Bu süreçte yasal hakların korunması adına tahliye davalarını titizlikle takip ediyorum.
        </p>

        <h3><br>Ödenmeyen Kira Alacakları</h3>
        <p>
          Kiracının kira bedelini zamanında ödememesi durumunda, icra takibi başlatılarak alacağın tahsil edilmesi mümkündür.
          Ödenmeyen kira alacakları için icra takibinin başlatılması, tahliye talepleriyle birlikte yürütülebilir.
          Bu tür alacakların tahsilinde müvekkillerimin haklarını korumak ve sürecin etkin şekilde yürütülmesini sağlamak adına hukuki destek sunuyorum.
        </p>

        <h3><br>Kira Sözleşmelerinin Hazırlanması ve Uyuşmazlıkların Çözümü</h3>
        <p>
          Kira sözleşmelerinin doğru hazırlanması, tarafların hak ve yükümlülüklerinin net bir şekilde belirlenmesini sağlar.
          Eksik veya yanlış düzenlenmiş kira sözleşmeleri, ileride taraflar arasında uyuşmazlıklara yol açabilir.
          Kira sözleşmelerinin hazırlanması, revize edilmesi ve sözleşme kaynaklı uyuşmazlıkların çözümünde destek sunuyorum.
        </p>

        <h3><br>İhtiyaç Nedeniyle Tahliye Davaları</h3>
        <p>
          Mal sahibinin, taşınmazı kendisi, eşi, çocukları veya bakmakla yükümlü olduğu kişiler için kullanma ihtiyacı varsa,
          ihtiyaç nedeniyle tahliye davası açılabilir. Bu tür davalarda, ihtiyaç gerekçesinin doğru şekilde sunulması ve yasal prosedürün eksiksiz
          takip edilmesi önemlidir. Sürecin hızlı ve adil şekilde sonuçlanması için hukuki destek sağlamaktayım.
        </p>

        <h3><br>Kira Davalarında Profesyonel Destek</h3>
        <p>
          Kira davaları, mal sahipleri ve kiracılar arasındaki anlaşmazlıkların çözülmesi açısından büyük önem taşır.
          Kira bedelinin tespiti, tahliye davaları, kira sözleşmelerinin hazırlanması ve ödenmeyen kira alacaklarının tahsili süreçlerinde,
          haklarınızı korumak ve mağduriyetlerinizi gidermek için profesyonel hukuki destek sunuyorum.
          Her aşamada müvekkillerimin yanında yer alarak hak kayıplarını önlemeyi amaçlıyorum.
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