<?php
require "libs/variables.php";
require "libs/functions.php";
include "partials/header.php";
include "partials/navbar.php";

// Django kursuna özel bilgiler
$kurs_baslik    = "Django Kursu";
$kurs_altbaslik = "Sıfırdan İleri Seviye Python Django ile Web Geliştirme";
$kurs_resim     = "3.jpg";

// Django kurs içeriği (akordiyon)
$kurs_icerigi = [
    ["baslik" => "1. Django'ya Giriş ve Kurulum", "konular" => [
        "Django Nedir? Python ile Profesyonel Web Geliştirme",
        "virtualenv ve Django Kurulumu",
        "İlk Proje Oluşturma (django-admin startproject)",
        "runserver ile Geliştirme Sunucusu",
        "Proje ve Uygulama (app) Yapısı"
    ]],
    ["baslik" => "2. Modeller ve Veritabanı", "konular" => [
        "models.py ile Veri Modelleme",
        "Migration Sistemi (makemigrations & migrate)",
        "Django ORM Kullanımı",
        "Admin Paneline Model Kayıt Etme",
        "Veritabanı İlişkileri (ForeignKey, ManyToMany)"
    ]],
    ["baslik" => "3. URL Routing ve View'lar", "konular" => [
        "urls.py ile URL Yapılandırma",
        "Function-Based vs Class-Based Views",
        "Template Rendering (render())",
        "Context ile Veri Gönderme",
        "Django Template Language (DTL)"
    ]],
    ["baslik" => "4. Formlar ve Kullanıcı İşlemleri", "konular" => [
        "Django Forms ve ModelForm",
        "Form Doğrulama (clean, validators)",
        "Kullanıcı Kayıt & Giriş Sistemi",
        "LoginRequiredMixin ve @login_required",
        "Şifre Değiştirme ve Sıfırlama"
    ]],
    ["baslik" => "5. Django REST Framework (API)", "konular" => [
        "DRF Kurulumu ve Serializers",
        "ViewSets ve Routers",
        "Token & JWT Authentication",
        "API Testi (Postman, Thunder Client)",
        "Permission ve Throttling"
    ]],
    ["baslik" => "6. İleri Seviye Özellikler", "konular" => [
        "Signals (pre_save, post_save)",
        "Custom Middleware",
        "Cache Sistemi (Redis)",
        "Static ve Media Dosyaları",
        "Custom User Model"
    ]],
    ["baslik" => "7. Güvenlik ve Performans", "konular" => [
        "CSRF, XSS, Clickjacking Koruması",
        "HTTPS ve Security Middleware",
        "Query Optimizasyonu (select_related, prefetch_related)",
        "Debug Toolbar Kullanımı"
    ]],
    ["baslik" => "8. Gerçek Hayat Projeleri", "konular" => [
        "Tam Donanımlı Blog Sistemi (Yazı, Kategori, Yorum, Tag)",
        "E-Ticaret Sitesi (Ürün, Sepet, Sipariş)",
        "Kişisel Portfolyo + Admin Paneli",
        "REST API Projesi + Frontend Entegrasyonu",
        "Deploy: PythonAnywhere, Render, Railway, Docker"
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
        /* Django Görselinden Alınan Renk Paleti */
        .page-background {
            background: linear-gradient(135deg, #447fc1, #000000ff, #447fc1);
            min-height: 100vh;
            padding: 60px 0;
        }
        .kurs-baslik {
            color: white !important;
            text-shadow: 0 4px 15px rgba(0,0,0,0.8);
            font-weight: 900;
        }
        .kurs-gorsel {
            max-width: 520px;
            width: 100%;
            border-radius: 25px;
            border: 12px solid #fe9900;
            box-shadow: 0 20px 50px #fe9900;
        }
        .egitim-ozeti {
            background: rgba(255,255,255,0.98);
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 15px 45px rgba(0,0,0,0.4);
            border-left: 10px solid #fe9900;
            margin-top: 40px;
        }
        .egitim-ozeti h3 {
            color: #fe9900;
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
        .egitim-ozeti strong { 
            color: #fe9900; 
            font-weight: 700; 
        }

        .bolum-baslik-btn {
            background: #fe9900 !important;
            color: white !important;
            font-weight: 700;
            font-size: 1.35rem;
            padding: 20px 28px;
            border-radius: 18px 18px 0 0 !important;
        }
        .bolum-baslik-btn:hover, .bolum-baslik-btn:not(.collapsed) {
            background: #fe9900 !important;
        }
        .bolum-baslik-btn::after { 
            filter: brightness(0) invert(1) !important; 
        }

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
                    Python Django ile hızlı, güvenli ve profesyonel web uygulamaları geliştireceksin. Instagram, Pinterest, Spotify gibi devler Django kullanıyor!</p>

                    <p><strong>Neler öğreneceksin?</strong><br>
                    Django ORM, Admin Paneli, REST API (DRF), Authentication, Signals, Docker, deployment ve gerçek hayat projeleri.</p>

                    <p><strong>Kursu bitirince neler yapabileceksin?</strong><br>
                    Freelancer olarak yüksek gelirli işler alabilir, backend/full-stack developer olabilir, büyük ölçekli web projeleri yapabilir ve global şirketlerde çalışabilirsin!</p>
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
            <a href="index.php" class="btn btn-lg px-5 py-3 text-white" style="background:#44b78b; border-radius:50px; font-weight:bold;">
                Ana Sayfaya Dön
            </a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>