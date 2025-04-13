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
      rel="stylesheet"
    />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />
    <link rel="stylesheet" href="style/style.php">
    <meta name="google-translate-customization" content="id">
    <script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {
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
          <img src="images/bosanma-davalari.png" alt="bosanma-davalari" />
        </div>
        <div class="miras-content">
          <h2>Boşanma Davaları</h2>
          <p>
            Boşanma davaları, evlilik birliğinin temelden sarsılması nedeniyle
            tarafların yasal yollarla ayrılmasını sağlayan bir süreçtir. Türk
            Medeni Kanunu kapsamında düzenlenen boşanma davaları, tarafların
            maddi ve manevi haklarını doğrudan etkileyen davalardır. Boşanma
            sürecinde, nafaka, velayet, mal paylaşımı ve tazminat gibi konular
            detaylı bir şekilde ele alınmaktadır.
          </p>

          <h3><br />Anlaşmalı Boşanma Davaları</h3>
          <p>
            Anlaşmalı boşanma, tarafların boşanma ve boşanmanın sonuçları
            üzerinde tam bir uzlaşmaya varması durumunda gerçekleşir. Mahkemeye
            sunulacak anlaşmalı boşanma protokolünün eksiksiz ve yasalara uygun
            şekilde hazırlanması büyük önem taşır. Tarafların uzlaşmazlık
            yaşamadan hızlı bir şekilde boşanabilmesi için süreci profesyonel
            bir şekilde yönetiyorum.
          </p>

          <h3><br />Çekişmeli Boşanma Davaları</h3>
          <p>
            Taraflar arasında uzlaşmanın sağlanamadığı durumlarda çekişmeli
            boşanma davası açılır. Bu davalarda, kusur tespiti, nafaka, velayet
            ve mal paylaşımı gibi konular yargılama sürecinde karara bağlanır.
            Delil toplanması, tanıkların dinlenmesi ve etkili bir savunmanın
            hazırlanması, çekişmeli boşanma davalarında kritik bir rol oynar.
            Tarafımca, müvekkillerimin haklarını korumak adına süreci titizlikle
            takip ediyorum.
          </p>

          <h3><br />Nafaka Talepleri</h3>
          <p>
            Boşanma davalarında, eşlerden birinin yoksulluğa düşmemesi için
            "yoksulluk nafakası" ve çocukların bakım giderleri için "iştirak
            nafakası" talep edilebilir. Nafaka miktarının belirlenmesi,
            tarafların gelir durumu ve ihtiyaçlarına göre mahkeme tarafından
            yapılır. Nafaka taleplerinin doğru şekilde hazırlanması ve hukuki
            dayanağa oturtulması adına destek sağlıyorum.
          </p>

          <h3><br />Velayet Davaları</h3>
          <p>
            Boşanma sürecinde çocukların üstün yararı göz önünde bulundurularak
            velayet kararı verilir. Mahkeme, çocuğun fiziksel ve psikolojik
            sağlığı, eğitim durumu ve ebeveynlerin yaşam koşulları gibi
            unsurları değerlendirir. Velayet davalarında çocuğun haklarının
            korunması ve ebeveynler arasında adil bir çözüm sağlanması için
            süreci profesyonel şekilde yönetiyorum.
          </p>

          <h3><br />Mal Paylaşımı Davaları</h3>
          <p>
            Evlilik birliği içerisinde edinilen malların paylaşımı, boşanma
            davalarında önemli bir uyuşmazlık konusu olabilir. Türk Medeni
            Kanunu'na göre edinilmiş mallara katılma rejimi esastır. Ancak
            taraflar arasında farklı mal rejimleri söz konusuysa, mal paylaşımı
            buna göre yapılır. Mal rejimi davalarında, hak kayıplarını önlemek
            adına gerekli tüm hukuki adımları atıyorum.
          </p>

          <h3><br />Boşanma Davalarında Profesyonel Destek</h3>
          <p>
            Boşanma davaları, hem duygusal hem de hukuki açıdan zorlu bir
            süreçtir. Tarafların haklarının korunması, sürecin adil ve hızlı bir
            şekilde sonuçlanması büyük önem taşır. Anlaşmalı ve çekişmeli
            boşanma davalarında, nafaka, velayet ve mal paylaşımı konularında
            profesyonel hukuki destek sunarak müvekkillerimin yanında yer
            alıyorum.
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
