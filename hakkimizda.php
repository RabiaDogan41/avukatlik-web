<?php
include 'config.php';

// İletişim bilgilerini çek
$stmt = $db->query("SELECT * FROM contact_info WHERE id = 1");
$contact = $stmt->fetch();

$stmt = $db->query("SELECT * FROM about_us WHERE id = 1");
$about = $stmt->fetch();


$stmt = $db->prepare("SELECT * FROM legal_warnings2 LIMIT 1");
$stmt->execute();
$legal_warning = $stmt->fetch(PDO::FETCH_ASSOC);

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

  <section class="about-us" style="margin-top: 90px">
    <div class="about-content">
      <div class="about-image">
        <img src="<?= htmlspecialchars($about['image']); ?>" alt="Biz Kimiz">
      </div>
      <div class="about-text">
        <h2><?= htmlspecialchars($about['title']); ?></h2>
        <p><?= nl2br(htmlspecialchars($about['content'])); ?></p>
      </div>
    </div>
  </section>

  <section class="vision-mission">
    <h2 class="section-title">Vizyonumuz ve Misyonumuz</h2>
    <div class="vision-mission-container">
      <div class="vision">
        <h3>Vizyonumuz</h3>
        <p>
          Hukukun üstünlüğünü savunarak, müvekkillerimize en iyi çözümleri sunan ve toplumsal adalete katkıda bulunan
          bir lider avukatlık hizmeti sunmak. İleri görüşlü, yenilikçi ve güvenilir bir yaklaşım benimseyerek,
          etik değerlerden ödün vermeden, hukuk alanında örnek teşkil eden bir hizmet anlayışını sürdürüyoruz.
        </p>
      </div>
      <div class="mission">
        <h3>Misyonumuz</h3>
        <p>
          Müvekkillerimizin haklarını korumak ve hukuki sorunlarına etkin çözümler sunmak için çalışıyoruz.
          Her bir dava ve hukuki süreçte, adaleti sağlamak adına detaylara titizlikle yaklaşarak, güvenilir ve
          profesyonel bir hizmet anlayışını benimsemekteyiz. Amacımız, müvekkillerimizin yanında güçlü bir
          savunucu olarak yer alırken, hukuk sisteminin doğru işlemesine katkı sağlamaktır.
        </p>
      </div>
    </div>
  </section>

  <section class="legal-warnings">
    <h2 class="section-title"><?= htmlspecialchars($legal_warning['title']); ?></h2>
    <div class="warnings-container">
      <p><?= nl2br(htmlspecialchars($legal_warning['content'])); ?></p>
    </div>
  </section>






  <section class="practice-areas">
    <h2 class="section-title">Çalışma Alanlarımız</h2>
    <div class="area-container">
      <a href="miras-hukuku.php" class="area-box">
        <h1>Miras Hukuku</h1>
      </a>
      <a href="aile-hukuku.php" class="area-box">
        <h1>Aile Hukuku</h1>
      </a>
      <a href="ceza-hukuku.php" class="area-box">
        <h1>Ceza Hukuku</h1>
      </a>
      <a href="is-hukuku.php" class="area-box">
        <h1>İş Hukuku</h1>
      </a>
      <a href="ticaret-hukuku.php" class="area-box">
        <h1>Ticaret Hukuku</h1>
      </a>
      <a href="gayrimenkul-hukuku.php" class="area-box">
        <h1>Gayrimenkul Hukuku</h1>
      </a>
      <a href="bosanma-davalari.php" class="area-box">
        <h1>Boşanma Davaları</h1>
      </a>
      <a href="tazminat-davalari.php" class="area-box">
        <h1>Tazminat Davaları</h1>
      </a>
      <a href="icra-iflas.php" class="area-box">
        <h1>İcra ve İflas Hukuku</h1>
      </a>
      <a href="kira-davalari.php" class="area-box">
        <h1>Kira Davaları</h1>
      </a>
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