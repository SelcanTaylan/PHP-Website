<?php
    const title="Popüler Kurslar";
    $kategoriler= array(
        array("kategori_adi"=>"Programlama","aktif"=>true),
        array("kategori_adi"=>"Web Geliştirme","aktif"=>false),
        array("kategori_adi"=>"Veri Analizi","aktif"=>false),
        array("kategori_adi"=>"Ofis Uygulamaları","aktif"=>false),
        
    );


    $sehirler = array(
        "34" => "İstanbul",
        "22" => "Edirne",
        "06" => "Ankara",
        "35" => "İzmir",
        "16" => "Bursa",
        "07" => "Antalya",
        "42" => "Konya",
        "01" => "Adana",
        "02" => "Adıyaman",
        "27" => "Gaziantep",
        "41" => "Kocaeli"
    );

    $hobiler = array(
        "1" => "Film veya Dizi İzlemek",
        "2" => "Spor Yapmak",
        "3" => "Müzik Dinlemek",
        "4" => "Kitap Okumak",
        "5" => "Kod Yazmak",
        "6" => "Tatlı Yapmak",
        "7" => "Resim Çizmek",
        "8" => "Gezmek"
    );


    $kurslar=array(
        "1"=>array(
            "baslik"=>"Php Kursu",
            "url"=>"PhpKursu.php",
            "altBaslik"=>"Sıfırdan İleri Seviye Php İle Web Geliştirme Kursu",
            "resim"=>"1.png",
            "yayinTarihi"=>"01.01.2023",
            "yorumSayisi"=>0,
            "begeniSayisi"=>27,
            "onay"=>true
        ),
        "2"=>array(
            "baslik"=>"Python Kursu",
            "url"=>"PythonKursu.php",
            "altBaslik"=>"Sıfırdan İleri Seviye Python Programlama Kursu",
            "resim"=>"2.png",
            "yayinTarihi"=>"01.02.2023",
            "yorumSayisi"=>10,
            "begeniSayisi"=>18,
            "onay"=>true
        ),
        "3"=>array(
            "baslik"=>"Node.js Kursu",
            "url"=>"NodeJSKursu.php",
            "altBaslik"=>"Sıfırdan İleri Seviye Node.js Programlama Kursu",
            "resim"=>"4.png",
            "yayinTarihi"=>"11.02.2024",
            "yorumSayisi"=>8,
            "begeniSayisi"=>22,
            "onay"=>true
        ),
        "4"=>array(
            "baslik"=>"Django Kursu",
            "url"=>"DjangoKursu.php",
            "altBaslik"=>"Sıfırdan İleri Seviye Django Programlama Kursu",
            "resim"=>"3.jpg",
            "yayinTarihi"=>"30.03.2024",
            "yorumSayisi"=>8,
            "begeniSayisi"=>22,
            "onay"=>true
        )
        
   );



   
 
?>