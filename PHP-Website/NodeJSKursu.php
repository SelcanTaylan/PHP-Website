<?php
require "libs/variables.php";
require "libs/functions.php";
include "partials/header.php";
include "partials/navbar.php";

// Node.js kursuna özel bilgiler
$kurs_baslik    = "Node.js Kursu";
$kurs_altbaslik = "Sıfırdan İleri Seviye Node.js ile Backend Geliştirme";
$kurs_resim     = "3.jpg";

// Node.js kurs içeriği (akordiyon)
$kurs_icerigi = [
    ["baslik" => "1. Node.js'ye Giriş", "konular" => [
        "Node.js Nedir? JavaScript ile Sunucu Programlama",
        "NPM ve package.json Oluşturma",
        "İlk Node.js Server'ı Çalıştırma",
        "Event Loop ve Non-Blocking I/O"
    ]],
    ["baslik" => "2. Express.js ile Web Sunucusu", "konular" => [
        "Express.js Kurulumu",
        "Route Tanımlama (GET, POST, PUT, DELETE)",
        "Middleware Kullanımı",
        "EJS Template Engine ile Görünüm"
    ]],
    ["baslik" => "3. Veritabanı Entegrasyonu", "konular" => [
        "MongoDB + Mongoose ile NoSQL",
        "MySQL + mysql2 ile SQL",
        "CRUD İşlemleri",
        "Async/Await ile Modern Kod Yazımı"
    ]],
    ["baslik" => "4. Kullanıcı Doğrulama (Authentication)", "konular" => [
        "JWT (JSON Web Token)",
        "bcrypt ile Şifre Şifreleme",
        "Passport.js Kullanımı",
        "Google OAuth 2.0 Entegrasyonu"
    ]],
    ["baslik" => "5. RESTful API Geliştirme", "konular" => [
        "API Nedir? REST Prensipleri",
        "Postman ile API Testi",
        "Error Handling ve Validation",
        "Rate Limiting"
    ]],
    ["baslik" => "6. Gerçek Zamanlı Uygulamalar", "konular" => [
        "Socket.io ile WebSocket",
        "Canlı Chat Uygulaması",
        "Gerçek Zamanlı Bildirim Sistemi"
    ]],
    ["baslik" => "7. İleri Seviye Konular", "konular" => [
        "Environment Variables (.env)",
        "Logging (Winston)",
        "Docker ile Containerization",
        "Deploy: Vercel, Render, Railway, Heroku"
    ]],
    ["baslik" => "8. Gerçek Hayat Projeleri", "konular" => [
        "Blog API (Tam CRUD + Auth)",
        "E-Ticaret Backend Sistemi",
        "Canlı Chat + Online Kullanıcılar",
        "Kişisel Portfolyo + Admin Paneli"
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
        /* Node.js Görselinden Alınan Renk Paleti */
        .page-background {
            background: linear-gradient(135deg, #288c43, #000000ff, #288c43);
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
            border: 12px solid #2ecc71;
            box-shadow: 0 20px 50px rgba(46, 204, 113, 0.5);
        }
        .egitim-ozeti {
            background: rgba(255,255,255,0.98);
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 15px 45px rgba(0,0,0,0.4);
            border-left: 10px solid #2ecc71;
            margin-top: 40px;
        }
        .egitim-ozeti h3 {
            color: #2ecc71;
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
        .egitim-ozeti strong { color: #2ecc71; font-weight: 700; }

        .bolum-baslik-btn {
            background: #2ecc71 !important;
            color: #ffffffff !important;
            font-weight: 700;
            font-size: 1.35rem;
            padding: 20px 28px;
            border-radius: 18px 18px 0 0 !important;
        }
        .bolum-baslik-btn:hover, .bolum-baslik-btn:not(.collapsed) {
            background: #27ae60 !important;
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
                <img src="img/4.png" class="kurs-gorsel img-fluid" alt="<?php echo $kurs_baslik; ?>">

                <div class="egitim-ozeti">
                    <h3>Eğitim Özeti</h3>
                    <p><strong>Bu eğitim ne işe yarar?</strong><br>
                    Node.js ile yüksek performanslı, gerçek zamanlı ve ölçeklenebilir backend sistemleri geliştireceksin. Netflix, PayPal, Uber gibi devler Node.js kullanıyor!</p>

                    <p><strong>Neler öğreneceksin?</strong><br>
                    Express.js, MongoDB, JWT, REST API, Socket.io, Docker, gerçek zamanlı uygulamalar ve profesyonel deploy yöntemleri.</p>

                    <p><strong>Kursu bitirince neler yapabileceksin?</strong><br>
                    Freelancer olarak backend işleri alabilir, full-stack developer olabilir, büyük ölçekli API’ler yazabilir ve global şirketlerde çalışabilirsin!</p>
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
            <a href="index.php" class="btn btn-lg px-5 py-3 text-white" style="background:#2ecc71; border-radius:50px; font-weight:bold;">
                Ana Sayfaya Dön
            </a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>