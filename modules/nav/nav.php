<div class="colNav">
    <?php
    $user_id = $_SESSION['user_id'] ?? null;

    if ($user_id) {
        echo '<a href="/dashboard.php" class="logo_title">
        <img src="./img/AD_logo.jpeg" width="60px" alt="Logo AssoDigit" class="logo">
        <h1>AssoDigit</h1>
        </a>';
    } else {
        echo '
       <div class="logo_title">
       <img src="./img/AD_logo.jpeg" width="60px" alt="Logo AssoDigit" class="logo">
       <h1>AssoDigit</h1>
       </div>
       ';
    }
    ?>
</div>
<div class="colNav">
    <?php
    // if ($user_id) {
         if ($page === 'licencies') {
        include_once './modules/nav/navLicencie.php';
    } elseif ($page === 'paid') {
        include_once './modules/nav/navPaid.php';
    } elseif ($page === 'settings') {
        include_once './modules/nav/navSettings.php';
    } else {
        echo' ';
    }
    // } else {
       
    // }
   

    ?>

</div>