<?php 
      function kursEkle(&$kurslar, string $baslik, string $altbaslik, string $resim, string $yayinTarihi, int $yorumSayisi=0, int $begeniSayisi=0, bool $onay=true){
    $yeni_Kurs[count($kurslar)+1]=array(
        "baslik"=>$baslik,
        "altBaslik"=>$altbaslik,
        "resim"=>$resim,
        "yayinTarihi"=>$yayinTarihi,
        "yorumSayisi"=>$yorumSayisi,
        "begeniSayisi"=>$begeniSayisi,
        "onay"=>$onay
    );
    $kurslar= array_merge($kurslar,$yeni_Kurs);
   }

   function urlDuzenle($baslik){
    return str_replace(["ç","@","."], ["c","","-"], strtolower($baslik));
   }

   function kisaAciklama($altbaslik){
        if(strlen($altbaslik)>50){
            return substr($altbaslik,0,50)."...";
        }
        else{
            return $altbaslik;
        }
   }

   function safe_html($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;

   }
?>