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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400..800;1,400..800&family=League+Script&family=Playwrite+HU:wght@100..400&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&family=Raleway:ital,wght@0,100..900;1,100..900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
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
            <a href="index.php"><img src="images/logo.png" alt="logo"></a>
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
                <img src="images/aile-hukuku.png" alt="Aile Hukuku">
            </div>
            <div class="miras-content">
                <h2>Aile Hukuku</h2>
                <p>
                    Aile hukuku, Türk Medeni Kanunu’nda düzenlenen ve aile bireylerinin hak ve yükümlülüklerini ele alan bir hukuk dalıdır.  
                    Evlenme, boşanma, velayet, nafaka ve mal rejimi gibi konuları kapsar. Aile içi anlaşmazlıkların çözümlenmesi,  
                    tarafların haklarının korunması ve adaletin sağlanması açısından büyük önem taşır.
                </p>
                <h3> <br>Boşanma Davaları</h3>
                <p>
                    Boşanma davaları, taraflar arasındaki evlilik birliğinin temelden sarsılması durumunda açılır.  
                    Anlaşmalı ve çekişmeli boşanma türleri bulunur. Nafaka, tazminat, velayet gibi konularda  
                    müvekkillerimin haklarını en iyi şekilde savunarak sürecin hızlı ve etkili sonuçlanmasını sağlamaktayım.
                </p>
                <h3><br>Velayet ve Nafaka Davaları</h3>
                <p>
                    Boşanma veya ayrılık durumunda çocuğun velayetinin kimde kalacağı büyük önem taşır.  
                    Mahkeme, çocuğun üstün yararını göz önünde bulundurarak velayete karar verir.  
                    Ayrıca, iştirak nafakası (çocuk bakım giderleri) ve yoksulluk nafakası konularında da hukuki destek sağlıyorum.  
                    Müvekkillerimin haklarını titizlikle korumakta ve sürecin adil şekilde yürütülmesini amaçlamaktayım.
                </p>
                <h3><br>Mal Rejimi ve Mal Paylaşımı</h3>
                <p>
                    Evlilik süresince edinilen malların paylaşımı, boşanma durumunda en çok anlaşmazlık yaşanan konulardan biridir.  
                    Türk Medeni Kanunu'na göre, edinilmiş mallara katılma rejimi esastır. Ancak sözleşme ile farklı rejimler belirlenebilir.  
                    Mal paylaşımı davalarında tarafların haklarını koruyarak hukuki süreci en iyi şekilde yürütmekteyim.
                </p>

                <h3><br>Aile İçi Şiddet ve Koruma Kararları</h3>
                <p>
                    Aile içi şiddet vakalarında, 6284 sayılı Ailenin Korunması ve Kadına Karşı Şiddetin Önlenmesi Kanunu kapsamında,  
                    şiddet mağdurları için koruma kararları alınmasını sağlıyorum. Mağdurların güvenliğini ve haklarını  
                    korumak adına hızlı ve etkili bir şekilde hukuki destek sunmaktayım.
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