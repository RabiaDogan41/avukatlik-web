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
                <img src="images/ceza-hukuku.png" alt="Ceza Hukuku">
            </div>
            <div class="miras-content">
                <h2>Ceza Hukuku</h2>
                <p>
                    Ceza hukuku, toplum düzeninin korunması ve suç işlenmesinin önlenmesini amaçlayan hukuk dalıdır.
                    Türk Ceza Kanunu kapsamında suç teşkil eden fiiller, yaptırımları ve yargılama süreçleri belirlenmiştir.
                    Ceza davaları, bireylerin özgürlüğünü doğrudan etkileyen ve titizlikle yürütülmesi gereken süreçlerdir.
                    Bu noktada, haklarınızın korunması ve savunmanızın güçlü şekilde yapılması büyük önem taşır.
                </p>
                <h3> <br>Soruşturma ve Kovuşturma Süreçleri</h3>
                <p>
                    Ceza davalarında, soruşturma aşamasından kovuşturma aşamasına kadar her adımda hukuki destek sağlıyorum.
                    Şüpheli veya sanık konumundaki bireylerin haklarının ihlal edilmemesi adına, savunma stratejilerini titizlikle hazırlıyorum.
                    Adil yargılanma hakkınızın korunması ve lehinize olan delillerin toplanması için tüm süreci yakından takip ediyorum.
                </p>
                <h3><br>Velayet ve Nafaka Davaları</h3>
                <p>
                    Boşanma veya ayrılık durumunda çocuğun velayetinin kimde kalacağı büyük önem taşır.
                    Mahkeme, çocuğun üstün yararını göz önünde bulundurarak velayete karar verir.
                    Ayrıca, iştirak nafakası (çocuk bakım giderleri) ve yoksulluk nafakası konularında da hukuki destek sağlıyoruz.
                    Büromuz, müvekkillerimizin haklarını titizlikle korumakta ve sürecin adil şekilde yürütülmesini amaçlamaktadır.
                </p>
                <h3><br>Suç Türleri ve Savunma</h3>
                <p>
                    Ceza hukuku kapsamındaki suç türleri; mala karşı suçlar, kişilere karşı suçlar, cinsel suçlar,
                    uyuşturucu suçları, trafik suçları, bilişim suçları ve ekonomik suçlar gibi geniş bir yelpazeyi kapsar.
                    Her bir suç türü için detaylı inceleme yaparak, delil durumu ve somut olay çerçevesinde etkin bir savunma sunuyorum.
                </p>

                <h3><br>Adli Para Cezaları ve Hapis Cezaları</h3>
                <p>
                    Ceza davalarında, mahkemeler tarafından verilen adli para cezaları veya hapis cezalarının hukuka uygunluğunu değerlendiriyorum.
                    Haksız verilen kararların bozulması veya cezanın ertelenmesi, paraya çevrilmesi gibi talepleri ilgili mercilerde savunuyorum.
                    Müvekkil haklarını en iyi şekilde korumak adına yargı mercileri ile güçlü bir iletişim kuruyorum.
                </p>

                <h3><br>Mağdur Hakları</h3>
                <p>
                    Ceza davalarında yalnızca şüpheli veya sanığın değil, mağdur ve müştekilerin hakları da büyük önem taşır.
                    Mağduriyetin giderilmesi, şikayet süreçlerinin etkin şekilde yürütülmesi ve adaletin sağlanması adına hukuki destek sunuyorum.
                    Özellikle aile içi şiddet, dolandırıcılık, yaralama gibi suçlarda mağdurların yanında oluyorum.
                </p>

                <h3><br>Ceza Hukuku Alanında Güvenilir Çözümler</h3>
                <p>
                    Ceza davaları, bireylerin özgürlüğünü doğrudan ilgilendiren en ciddi dava türlerindendir.
                    Tarafımdan sunulan hizmet, sürecin adil, hızlı ve etkili şekilde yürütülmesini sağlamaktadır.
                    Soruşturma, kovuşturma, temyiz aşamalarında güçlü bir savunma ile haklarınızı koruyorum.
                    Hukukun üstünlüğünü esas alarak, her aşamada müvekkilimin yanında yer alıyorum.
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