<?php

if (!empty($_GET['q'])) {
    $keyword = $_GET['q'];

    $kurslar = array_filter($kurslar, function($kurs) use ($keyword) {
        return stristr($kurs['baslik'], $keyword) || stristr($kurs['altBaslik'], $keyword);
    });
}
?>


<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #e61b20 !important;">
    <div class="container">
        <a href="index.php" class="navbar-brand"> 
            <img src="img/loguTK.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
        </a>
   
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="index.php" class="nav-link active">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a href="index.php" class="nav-link">Kurslar</a>
            </li>
        </ul>

        <form action="index.php" method="get" class="search-bar">
            <input type="text" name="q" placeholder="Ara">
            <button type="submit">
                <i class="fas fa-search"></i>
            </button>
        </form>


        <ul class="navbar-nav me-2">
            <li class="nav-item">
                <a href="login.php" class="nav-link">Giriş Yap</a>
            </li>
            <li class="nav-item">
                <a href="register.php" class="nav-link">Kayıt Ol</a>
            </li>
        </ul>
    </div>
</nav>
