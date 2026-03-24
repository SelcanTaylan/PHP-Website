<?php  
require "libs/variables.php";
require "libs/functions.php";
include "partials/header.php";
include "partials/navbar.php";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php Kursu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Senin orijinal gradientin - hiç dokunmadım */
        .page-background {
            background: linear-gradient(135deg, #880015, #000000ff, #880015);
            min-height: 100vh;
            padding: 50px 0;
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

        /* ÜST ÜSTE BİNME SORUNU TAMAMEN ÇÖZÜLDÜ */
        .egitim-ozeti {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 22px;
            padding: 35px;
            box-shadow: 0 15px 45px rgba(0,0,0,0.4);
            border-left: 10px solid #880015;
            margin-top: 40px; /* Görselin altına boşluk */
            margin-bottom: 30px;
        }

        .egitim-ozeti h3 {
            color: #880015;
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
            color: #880015;
            font-weight: 700;
        }

        /* Akordiyon stilleri */
        .bolum-baslik-btn {
            background: #880015 !important;
            color: white !important;
            font-weight: 700;
            font-size: 1.35rem;
            padding: 20px 28px;
            border-radius: 18px 18px 0 0 !important;
        }
        .bolum-baslik-btn:hover, 
        .bolum-baslik-btn:not(.collapsed) {
            background: #6b0012 !important;
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

        /* Mobilde düzgün dursun diye */
        @media (max-width: 992px) {
            .egitim-ozeti {
                margin-top: 50px;
            }
            .kurs-gorsel {
                max-width: 400px;
            }
        }
    </style>
</head>
<body>

<div class="page-background">
    <div class="container">
        <!-- Başlık -->
        <div class="text-center mb-5">
            <h1 class="display-4 kurs-baslik">Php Kursu</h1>
            <p class="lead text-white fs-3 opacity-90">Sıfırdan İleri Seviye PHP ile Web Geliştirme</p>
        </div>

        <div class="row g-5 align-items-start justify-content-center">
            
            <!-- Sol: Görsel + Eğitim Özeti -->
            <div class="col-lg-5 text-center">
                <img src="img/1.png" class="kurs-gorsel img-fluid" alt="PHP Kursu">

                <!-- ARTIK ÜST ÜSTE BİNMİYOR! -->
                <div class="egitim-ozeti">
                    <h3>Eğitim Özeti</h3>
                    
                    <p><strong>Bu eğitim ne işe yarar?</strong><br>
                    PHP ile dinamik web siteleri ve uygulamaları geliştirmeyi sıfırdan profesyonel seviyeye taşıyacaksın. Günümüzde hâlâ milyonlarca site (WordPress, Laravel projeleri, e-ticaret sistemleri) PHP ile çalışıyor.</p>

                    <p><strong>Neler öğrenecek / neler kullanılacak?</strong><br>
                    PHP 8+, MySQL, PDO, OOP, MVC yapısı, Form güvenliği, Session/Cookie yönetimi, Dosya işlemleri, Ajax entegrasyonu, RESTful API geliştirme ve gerçek hayat projeleri.</p>

                    <p><strong>Bu kursu bitirince neler yapabileceksin?</strong><br>
                    Kendi blog/e-ticaret sitesini kurabilecek, freelancer olarak iş alabilecek, şirketlerde backend developer olarak çalışabilecek, Laravel/CodeIgniter gibi frameworklere çok hızlı geçiş yapabilecek ve profesyonel web projeleri geliştirebileceksin.</p>
                </div>
            </div>

            <!-- Sağ: Kurs İçeriği -->
            <div class="col-lg-7">
                <h2 class="text-white fw-bold mb-5 text-center text-lg-start" style="font-size: 2.4rem; text-shadow: 0 3px 10px rgba(0,0,0,0.5);">
                    Kurs İçeriği
                </h2>

                <div class="accordion" id="kursAccordion">
                    <?php
                    $kurs_icerigi = [
                        ["baslik" => "1. PHP'ye Giriş ve Kurulum", "konular" => [
                            "PHP nedir ve tarihçesi","XAMPP / WAMP / Laravel Valet kurulumu","İlk PHP dosyası ve 'Hello World'",
                            "Değişkenler ve veri tipleri","echo, print, print_r, var_dump farkları","Yorum satırları"
                        ]],
                        ["baslik" => "2. Kontrol Yapıları ve Döngüler", "konular" => [
                            "if - else - elseif yapıları", "switch-case kullanımı", "for döngüsü",
                            "while ve do-while", "foreach döngüsü", "break, continue ve goto"
                        ]],
                        ["baslik" => "3. Diziler ve Fonksiyonlar", "konular" => [
                            "İndeksli ve ilişkisel diziler", "Çok boyutlu diziler",
                            "Önemli array fonksiyonları", "Kullanıcı tanımlı fonksiyonlar",
                            "Parametre, return, anonim fonksiyonlar"
                        ]],
                        ["baslik" => "4. Form İşlemleri ve Güvenlik", "konular" => [
                            "GET ve POST metodları", "Form doğrulama", "XSS ve SQL Injection koruması",
                            "htmlspecialchars(), trim()", "CSRF token", "Dosya yükleme güvenliği"
                        ]],
                        ["baslik" => "5. Veritabanı İşlemleri (PDO)", "konular" => [
                            "MySQL bağlantısı", "CRUD işlemleri", "Prepared Statements",
                            "Üye kayıt & giriş sistemi", "Şifre hashleme"
                        ]],
                        ["baslik" => "6. Nesne Yönelimli Programlama", "konular" => [
                            "Class, object, property, method", "public/private/protected",
                            "Inheritance, Abstract class, Interface", "Trait kullanımı"
                        ]],
                        ["baslik" => "7. Gerçek Projeler", "konular" => [
                            "Blog sistemi (kategori, yazı, yorum)", "Admin paneli",
                            "Todo uygulaması", "Ajax ile dinamik içerik", "Sayfalama ve arama motoru"
                        ]]
                    ];

                    foreach($kurs_icerigi as $index => $bolum):
                    ?>
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
            <a href="index.php" class="btn btn-lg px-5 py-3 text-white" style="background:#880015; border-radius:50px; font-weight:bold;">
                Ana Sayfaya Dön
            </a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>