<?php
require "libs/variables.php";
require "libs/functions.php";
include "partials/header.php";
include "partials/navbar.php";

// Python kursuna özel bilgiler
$kurs_baslik    = "Python Kursu";
$kurs_altbaslik = "Sıfırdan İleri Seviye Python Programlama";
$kurs_resim     = "2.png";

// Python kurs içeriği (akordiyon)
$kurs_icerigi = [
    ["baslik" => "1. Python'a Giriş ve Kurulum", "konular" => [
        "Python nedir ve neden öğrenmeliyiz?",
        "Python kurulumu (Windows, Mac, Linux)",
        "VS Code + Python eklentisi kurulumu",
        "İlk program: Hello World!",
        "Değişkenler, veri tipleri ve type() fonksiyonu"
    ]],
    ["baslik" => "2. Kontrol Yapıları ve Döngüler", "konular" => [
        "if - elif - else yapıları",
        "Karşılaştırma ve mantıksal operatörler",
        "for döngüsü ve range()",
        "while döngüsü",
        "break, continue, pass"
    ]],
    ["baslik" => "3. Veri Yapıları", "konular" => [
        "List, Tuple, Set, Dictionary",
        "List comprehension",
        "Dictionary metodları",
        "İç içe veri yapıları"
    ]],
    ["baslik" => "4. Fonksiyonlar", "konular" => [
        "Fonksiyon tanımlama (def)",
        "Parametre ve return",
        "Lambda fonksiyonları",
        "args ve kwargs",
        "Kapsam (scope) kuralları"
    ]],
    ["baslik" => "5. Dosya İşlemleri ve Modüller", "konular" => [
        "TXT, CSV, JSON okuma/yazma",
        "with open() kullanımı",
        "Kendi modülümüzü yazma",
        "pip ve popüler kütüphaneler"
    ]],
    ["baslik" => "6. Nesne Yönelimli Programlama (OOP)", "konular" => [
        "Class ve object kavramları",
        "__init__ ve self",
        "Inheritance (Kalıtım)",
        "Polymorphism ve encapsulation",
        "Magic methods (__str__, __len__ vs)"
    ]],
    ["baslik" => "7. Django ile Web Geliştirme", "konular" => [
        "Django kurulumu ve proje oluşturma",
        "Models, Views, Templates (MVT)",
        "Admin paneli",
        "User authentication (kayıt/giriş)",
        "URL routing"
    ]],
    ["baslik" => "8. Gerçek Hayat Projeleri", "konular" => [
        "Blog sitesi (yazı, yorum, kategori)",
        "Todo uygulaması",
        "REST API geliştirme",
        "Web scraper (BeautifulSoup)",
        "Telegram/Discord botu"
    ]]
];
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $kurs_baslik; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .page-background {
            background: linear-gradient(135deg, #ffdf58, #000000ff, #ffdf58);
            min-height: 100vh;
            padding: 60px 0;
        }
        .kurs-baslik {
            color: white !important;
            text-shadow: 0 4px 15px rgba(0,0,0,0.7);
            font-weight: 900;
        }
        .kurs-gorsel {
            max-width: 520px;
            width: 100%;
            border-radius: 25px;
            border: 12px solid white;
            box-shadow: 0 20px 50px rgba(0,0,0,0.5);
        }
        .egitim-ozeti {
            background: rgba(255,255,255,0.98);
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 15px 45px rgba(0,0,0,0.4);
            border-left: 10px solid #3c79ab;
            margin-top: 40px;
        }
        .egitim-ozeti h3 {
            color: #3c79ab;
            font-weight: 900;
            font-size: 2.1rem;
            text-align: center;
            margin-bottom: 25px;
        }
        .egitim-ozeti p {
            font-size: 1.15rem;
            line-height: 2;
            color: #333;
            margin-bottom: 22px;
        }
        .egitim-ozeti strong { color: #3c79ab; font-weight: 700; }

        .bolum-baslik-btn {
            background: #3c79ab !important;
            color: white !important;
            font-weight: 700;
            font-size: 1.35rem;
            padding: 20px 28px;
            border-radius: 18px 18px 0 0 !important;
        }
        .bolum-baslik-btn:hover, .bolum-baslik-btn:not(.collapsed) {
            background: #3c79ab !important;
        }
        .bolum-baslik-btn::after { filter: brightness(0) invert(1) !important; }

        .accordion-body {
            background: white !important;
            padding: 28px 35px !important;
            border-radius: 0 0 18px 18px;
            font-size: 1.15rem;
        }
        .accordion-item {
            margin-bottom: 25px;
            border-radius: 18px !important;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(0,0,0,0.25);
        }

        @media (max-width: 992px) {
            .kurs-gorsel { max-width: 400px; }
            .egitim-ozeti { margin-top: 50px; }
        }
    </style>
</head>
<body>

<div class="page-background">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="display-4 kurs-baslik"><?php echo $kurs_baslik; ?></h1>
            <p class="lead text-white fs-3 opacity-90"><?php echo $kurs_altbaslik; ?></p>
        </div>

        <div class="row g-5 align-items-start justify-content-center">
            <!-- Sol taraf: Görsel + Eğitim Özeti -->
            <div class="col-lg-5 text-center">
                <img src="img/<?php echo $kurs_resim; ?>" class="kurs-gorsel img-fluid" alt="<?php echo $kurs_baslik; ?>">

                <div class="egitim-ozeti">
                    <h3>Eğitim Özeti</h3>
                    <p><strong>Bu eğitim ne işe yarar?</strong><br>
                    Python ile veri analizi, yapay zeka, otomasyon, web geliştirme ve çok daha fazlasını sıfırdan profesyonel seviyeye taşıyacaksın.</p>

                    <p><strong>Neler öğreneceksin?</strong><br>
                    Python 3.11+, OOP, Django, API geliştirme, web scraping, otomasyon scriptleri, Pandas, NumPy, Flask ve gerçek hayat projeleri.</p>

                    <p><strong>Kursu bitirince neler yapabileceksin?</strong><br>
                    Freelancer olarak iş alabilir, veri analisti/backend developer olabilir, yapay zeka projelerine başlayabilir ve global şirketlerde çalışabilirsin!</p>
                </div>
            </div>

            <!-- Sağ taraf: Kurs İçeriği (Akordiyon) -->
            <div class="col-lg-7">
                <h2 class="text-white fw-bold mb-5 text-center text-lg-start" style="font-size: 2.4rem; text-shadow: 0 3px 10px rgba(0,0,0,0.5);">
                    Kurs İçeriği
                </h2>

                <div class="accordion" id="kursAccordion">
                    <?php foreach($kurs_icerigi as $index => $bolum): ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="bolum-baslik-btn accordion-button collapsed" 
                                        type="button" data-bs-toggle="collapse" 
                                        data-bs-target="#bolum-<?php echo $index; ?>">
                                    <?php echo htmlspecialchars($bolum['baslik']); ?>
                                </button>
                            </h2>
                            <div id="bolum-<?php echo $index; ?>" class="accordion-collapse collapse" data-bs-parent="#kursAccordion">
                                <div class="accordion-body">
                                    <ul class="list-unstyled mb-0">
                                        <?php foreach($bolum['konular'] as $konu): ?>
                                            <li class="py-2"><?php echo htmlspecialchars($konu); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="index.php" class="btn btn-lg px-5 py-3 text-white" style="background:#3c79ab; border-radius:50px; font-weight:bold;">
                Ana Sayfaya Dön
            </a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>