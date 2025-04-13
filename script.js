document.addEventListener("DOMContentLoaded", function () {
    // Çalışma Alanları Görünürlük Kontrolü
    const areaBoxes = document.querySelectorAll(".area-box");

    function checkVisibility() {
        const triggerPoint = window.innerHeight * 0.9; // Görünürlük eşiği
        areaBoxes.forEach((box) => {
            const boxTop = box.getBoundingClientRect().top; // Kutunun üst pozisyonu
            if (boxTop < triggerPoint && !box.classList.contains("show")) {
                box.classList.add("show"); // Görünürlük eklendiğinde animasyonu tetikle
            }
        });
    }

    // Scroll olayını throttle ile sınırla
    let throttleTimer = null;
    window.addEventListener("scroll", function () {
        if (throttleTimer) return;

        throttleTimer = setTimeout(() => {
            checkVisibility();
            throttleTimer = null;
        }, 100); // Scroll olayını 100ms aralıkla tetikler
    });

    checkVisibility(); // Sayfa yüklendiğinde ilk kontrol

    // Menü İkonu Açma/Kapama
    const menuIcon = document.querySelector(".menu-icon");
    const navbar = document.querySelector(".navbar ul");

    if (menuIcon && navbar) {
        menuIcon.addEventListener("click", function () {
            navbar.classList.toggle("show"); // "show" sınıfını ekler veya kaldırır

            // Açılan menünün z-index'ini artır
            if (navbar.classList.contains("show")) {
                navbar.style.zIndex = "10000"; // Üst katmana taşı
            } else {
                navbar.style.zIndex = ""; // Varsayılan z-index'e dön
            }
        });
    }

    // Makale Tarihi Ekleme
    const articleDate = document.querySelector(".article-date p");
    if (articleDate) {
        articleDate.textContent = `Yayınlanma Tarihi: ${new Date().toLocaleDateString("tr-TR")}`;
    }
});


document.addEventListener('DOMContentLoaded', () => {
    const menuIcon2 = document.querySelector('.menu-icon2');
    const sidebar = document.querySelector('.sidebar');

    if (menuIcon2 && sidebar) {
        menuIcon2.addEventListener('click', () => {
            menuIcon2.classList.toggle('active');
            sidebar.classList.toggle('open');
        });
    }
});


document.addEventListener('DOMContentLoaded', function () {
    const deleteButtons = document.querySelectorAll('.delete-button');
    const modal = document.getElementById('deleteModal');
    const confirmButton = document.getElementById('confirmDelete');
    const cancelButton = document.getElementById('cancelDelete');
    let deleteUrl = '';

    deleteButtons.forEach(button => {
        button.addEventListener('click', function (e) {
            e.preventDefault();
            deleteUrl = this.getAttribute('href'); // Silme URL'sini al
            modal.style.display = 'flex'; // Modalı göster
        });
    });

    confirmButton.addEventListener('click', function () {
        window.location.href = deleteUrl; // Silme işlemini gerçekleştir
    });

    cancelButton.addEventListener('click', function () {
        modal.style.display = 'none'; // Modalı kapat
    });

    // Modalın dışında tıklanınca kapatma
    window.addEventListener('click', function (e) {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // Belirli aralıklarla uyarı çubuğunu kontrol et
    const interval = setInterval(() => {
        const bannerFrame = document.querySelector('.goog-te-banner-frame');
        const bodyMargin = document.body.style.marginTop;

        // Eğer banner varsa gizle ve margin'i sıfırla
        if (bannerFrame) {
            bannerFrame.style.display = 'none';
            if (bodyMargin !== '0px') {
                document.body.style.marginTop = '0';
            }
        }
    }, 100);

    // Bir süre sonra interval'i durdur
    setTimeout(() => {
        clearInterval(interval);
    }, 5000); // 5 saniye sonra kontrolü durdur
});


