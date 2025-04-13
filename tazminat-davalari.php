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
        <img src="images/tazminat-davalari.png" alt="tazminat-davalari" />
      </div>
      <div class="miras-content">
        <h2>Tazminat Davaları</h2>
        <p>
          Tazminat davaları, bireylerin haksız fiil, sözleşme ihlali veya
          başka bir nedenle maddi ve manevi zararlarının giderilmesi amacıyla
          açtığı davalardır. Türk Borçlar Kanunu’na göre, bir kişinin hukuka
          aykırı fiili sonucunda başka bir kişiye verdiği zarar, tazminat
          yükümlülüğünü doğurur. Bu tür davalarda hak kayıplarının önlenmesi
          ve adil bir tazminatın sağlanması büyük önem taşır.
        </p>

        <h3><br />Maddi Tazminat Davaları</h3>
        <p>
          Maddi tazminat davaları, kişilerin malvarlığında meydana gelen somut
          zararların giderilmesi için açılır. Trafik kazaları, iş kazaları,
          haksız fiiller, sözleşme ihlalleri gibi durumlarda zararın tespit
          edilmesi ve tazmin edilmesi gerekmektedir. Tarafımca, zararın
          kapsamlı bir şekilde değerlendirilmesi ve hak kayıplarının önlenmesi
          için hukuki süreç titizlikle takip edilmektedir.
        </p>

        <h3><br />Manevi Tazminat Davaları</h3>
        <p>
          Manevi tazminat davaları, bireylerin yaşadığı psikolojik, duygusal
          ve sosyal zararların giderilmesi için açılır. Kişilik haklarına
          saldırı, trafik kazası, haksız tutuklama, aile içi şiddet ve ölüm
          olayları gibi durumlar manevi tazminat taleplerinin konusunu
          oluşturur. Yaşanan mağduriyetlerin giderilmesi ve adaletin
          sağlanması adına, haklarınızı koruyorum.
        </p>

        <h3><br />İş Kazası ve Meslek Hastalıklarından Doğan Tazminatlar</h3>
        <p>
          İş kazaları veya meslek hastalıkları sonucunda işçinin uğradığı
          maddi ve manevi zararların tazmin edilmesi gereklidir. Bu davalarda,
          işverenin iş sağlığı ve güvenliği yükümlülüklerini yerine getirip
          getirmediği detaylı bir şekilde incelenir. Tarafımca, iş kazası
          tespit tutanaklarının değerlendirilmesi ve tazminat taleplerinin
          güçlü bir şekilde savunulması sağlanmaktadır.
        </p>

        <h3><br />Destekten Yoksun Kalma Tazminatı</h3>
        <p>
          Bir kişinin haksız fiil veya kaza sonucu hayatını kaybetmesi
          durumunda, yakınlarının uğradığı zararın tazmini için "destekten
          yoksun kalma tazminatı" talep edilebilir. Bu tazminat, ölen kişinin
          sağlığında sağladığı maddi desteğin, hayatta kalanlar için devamını
          amaçlar. Tarafımca, hak sahiplerinin mağduriyetlerinin giderilmesi
          için hukuki destek sunuyorum.
        </p>

        <h3><br />Trafik Kazası Tazminatları</h3>
        <p>
          Trafik kazalarından doğan maddi ve manevi zararların tazmini için
          açılan davalar, kusur oranları ve zarar miktarı üzerinden
          değerlendirilir. Kazada yaralanan veya hayatını kaybeden kişilerin
          yakınları, tazminat talebinde bulunabilir. Tarafımca, sigorta
          şirketleri ile olan süreçler dahil olmak üzere, tazminat
          taleplerinin hukuka uygun şekilde takip edilmesi sağlanmaktadır.
        </p>

        <h3><br />Tazminat Davalarında Profesyonel Destek</h3>
        <p>
          Tazminat davaları, hukuki bilgi ve dikkat gerektiren davalardır.
          Maddi ve manevi tazminat taleplerinizin doğru bir şekilde
          hazırlanması ve sürecin etkin bir şekilde yürütülmesi için hukuki
          destek sunuyorum. Hak kayıplarının önlenmesi ve adil bir tazminatın
          sağlanması adına, her aşamada yanınızda yer alıyorum.
        </p>
      </div>
    </div>
  </section>

  <footer>
    <div class="footer-container">
      <!-- Left Footer -->
      <div class="left-footer">
        <h3>Bizimle İletişime Geçin</h3>
        <p><strong>Adres:</strong>Pancarlı Mahallesi Fevzi Çakmak Bulvarı 4 Nolu Sk. Kurtuluş Apartmanı Şehitkamil/Gaziantep</p>
        <p><strong>Telefon:</strong> 0507 868 28 09</p>
        <p><strong>E-posta:</strong> rabiaannaac@gmail.com</p>
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