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
                <img src="images/miras.png" alt="Miras Hukuku">
            </div>
            <div class="miras-content">
                <h2>Miras Hukuku</h2>
                <p>
                    Miras hukuku, Türk Medeni Kanunu’nun 495. ve devamı maddelerinde düzenlenen,
                    bir kişinin vefatından sonra malvarlığının kimlere ve ne şekilde intikal edeceğini düzenleyen hukuk dalıdır.
                    Mirasçılar, kan hısımları, eş ve bazen devlet olabilir. Ancak süreç, karmaşık hukuki
                    düzenlemeler ve çeşitli ihtilaflar nedeniyle uzmanlık gerektirir.
                </p>
                <h3> <br>Miras Paylaşımı</h3>
                <p>
                    Miras paylaşımı, mirasçılar arasında yasal ve iradi olarak gerçekleşebilir.
                    Vasiyetname, miras sözleşmesi veya sağlığında yapılan bağışlar, miras paylaşımına etki eden unsurlardır.
                    Mirasçılar arasındaki anlaşmazlıkları çözmek adına uzlaşmacı yöntemler
                    kullanarak süreçlerin hızlı ve adil şekilde sonuçlanmasını sağlarım.
                </p>
                <h3><br>Vasiyetnamenin İptali</h3>
                <p>
                    Miras bırakanın, iradesi dışında veya hukuka aykırı koşullarda vasiyetname hazırlaması durumunda,
                    iptal davası açılabilir. Türk Medeni Kanunu’na göre, vasiyetnamenin geçerliliği;
                    şekil şartlarına uygunluk, miras bırakanın ehliyeti ve iradesinin sakatlanmaması gibi
                    unsurlara bağlıdır. Bu tür davalarda sizlere gerekli hukuki desteği sağlarım.
                </p>
                <h3><br>Tenkis Davaları</h3>
                <p>
                    Saklı paylı mirasçıların, miras hakkının zedelendiği durumlarda açtığı davalara
                    "tenkis davası" denir. Saklı pay, mirasçının miras bırakan tarafından
                    kısıtlanamayacak olan yasal hakkıdır. Tenkis davalarının açılması ve
                    takibi süreçlerinde etkin hizmet sunmaktayım.
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