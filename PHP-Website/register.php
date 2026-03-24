<?php
    require "libs/variables.php";
    require "libs/functions.php";
?>
<?php include "partials/header.php"; ?>
<?php include "partials/navbar.php"; ?>

<?php  
    $usernameErr = $emailErr = $passwordErr = $repasswordErr = $cityErr = $hobbiesErr = "";
    $username = $email = $password = $repassword = $city = "";
    $hobbies = [];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["username"])) $usernameErr = "Kullanıcı Adı Alanı Boş Bırakılmamalı";
        else $username = safe_html($_POST["username"]);

        if (empty($_POST["email"])) $emailErr = "E-Mail Alanı Boş Bırakılmamalı";
        else $email = safe_html($_POST["email"]);

        if (empty($_POST["password"])) $passwordErr = "Parola Alanı Boş Bırakılmamalı";
        else $password = safe_html($_POST["password"]);

        if (empty($_POST["repassword"])) $repasswordErr = "Parola Tekrar Alanı Boş Bırakılmamalı";
        elseif ($_POST["password"] != $_POST["repassword"]) $repasswordErr = "Parola Tekrarı Eşleşmiyor";
        else $repassword = safe_html($_POST["repassword"]);

        if (!isset($_POST["city"]) || $_POST["city"] == -1) $cityErr = "Şehir Seçmelisiniz";
        else $city = safe_html($_POST["city"]);

        if (!isset($_POST["hobbies"])) $hobbiesErr = "Hobi Seçmelisiniz";
        else $hobbies = $_POST["hobbies"];
    }
?>

<link rel="stylesheet" href="register.css">

<div class="register-container">
    <!-- Sol taraf: Eyfel görseli -->
    <div class="left-side">
        <img src="img/eyfel.jpg" alt="Eyfel" class="img-fluid" style="width:100%; height:100%; object-fit:cover;">
    </div>

    <!-- Sağ taraf: Kayıt formu -->
    <div class="right-side">
        <div class="form-wrapper">
            <h2>Kayıt Ol</h2>
            <form action="register.php" method="post">
                <div class="input-group">
                    <input type="text" name="username" value="<?php echo $username; ?>" required>
                    <label>Kullanıcı Adı</label>
                    <span class="error"><?php echo $usernameErr; ?></span>
                </div>

                <div class="input-group">
                    <input type="email" name="email" value="<?php echo $email; ?>" required>
                    <label>Eposta</label>
                    <span class="error"><?php echo $emailErr; ?></span>
                </div>

                <div class="input-group">
                    <input type="password" name="password" required>
                    <label>Parola</label>
                    <span class="error"><?php echo $passwordErr; ?></span>
                </div>

                <div class="input-group">
                    <input type="password" name="repassword" required>
                    <label>Parola Tekrar</label>
                    <span class="error"><?php echo $repasswordErr; ?></span>
                </div>

                <div class="input-group">
                    <select name="city" required>
                        <option value="-1" selected>Şehir Seçiniz</option>
                        <?php foreach($sehirler as $plaka=>$sehir): ?>
                            <option value="<?php echo $plaka; ?>" <?php echo $city==$plaka? 'selected':'' ?>>
                                <?php echo $sehir; ?>
                            </option>
                        <?php endforeach;?>
                    </select>                
                    <span class="error"><?php echo $cityErr; ?></span>
                </div>

                <div class="hobbies-group">
                    <label>Hobiler</label>
                    <?php foreach($hobiler as $id=>$hobi): ?>
                        <label>
                            <input type="checkbox" name="hobbies[]" value="<?php echo $id;?>" 
                            <?php if(in_array($id,$hobbies)) echo 'checked' ?>>
                            <?php echo $hobi;?>
                        </label>
                    <?php endforeach;?>
                    <span class="error"><?php echo $hobbiesErr; ?></span>
                </div>

                <button type="submit" class="submit-btn">Kayıt Ol</button>
            </form>
        </div>
    </div>
</div>

<?php include "partials/footer.php"; ?>
