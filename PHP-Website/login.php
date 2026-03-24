<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Giriş başarılı kabul ediliyor
    header("Location: index.php?success=1");
    exit;
}

require "libs/variables.php";
require "libs/functions.php";
include "partials/header.php";
include "partials/navbar.php";

$usernameErr = $passwordErr = "";
$username = $password = "";
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons.js"></script>
    
</head>
<body>
<section>
    <div class="login-box">
        <form action="login.php" method="POST">
            <h2>Giriş Yap</h2>

            <div class="input-box">
                <div class="label-row">
                    <span class="icon"><ion-icon name="mail"></ion-icon></span>
                    <label for="email">E-posta</label>
                </div>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="input-box">
                <div class="label-row">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <label for="password">Parola</label>
                </div>
                <div style="position: relative;">
                    <input type="password" id="password" name="password" required>
                    <span class="toggle-password" onclick="togglePassword()">
                        <ion-icon id="eyeIcon" name="eye-off"></ion-icon>
                    </span>
                </div>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> Beni Hatırla</label>
            </div>

            <button type="submit">Giriş</button>
        </form>
    </div>
</section>

<script>
function togglePassword() {
    const password = document.getElementById("password");
    const eyeIcon = document.getElementById("eyeIcon");

    if (password.type === "password") {
        password.type = "text";
        eyeIcon.setAttribute("name", "eye");
    } else {
        password.type = "password";
        eyeIcon.setAttribute("name", "eye-off");
    }
}
</script>
</body>
</html>

<?php include "partials/footer.php"; ?>
