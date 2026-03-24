<?php if (isset($_GET['success'])): ?>
<div class="success-message" id="successBox">
    <span class="message-text">Giriş Başarılı!</span>
    <button class="close-btn" onclick="document.getElementById('successBox').style.display='none'">X</button>
</div>
<?php endif; ?>



<?php  
require "libs/variables.php";
require "libs/functions.php";
include "partials/header.php";
include "partials/navbar.php";
?>


<div class="container my-3"> 
    <div class="row">
        <div class="col-3">
            <?php include "partials/menu.php"; ?>   
        </div>
        <div class="col-9">
            <?php include "partials/title.php"; ?>
            <?php include "partials/courses.php"; ?>                      
        </div>
    </div>
</div>

<?php include "partials/footer.php"; ?>
