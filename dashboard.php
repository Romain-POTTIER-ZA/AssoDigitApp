<?php


$allowedPages = [
    'home'
];

$page = $_GET['page'] ?? 'home';

if (!in_array($page, $allowedPages)) {
    
    $page = 'home';
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once 'modules/settings/link.php'; ?>
    <title>AssoDigit</title>
</head>

<body>
    <nav>
        <?php include_once './modules/nav/nav.php'; ?>
    </nav>

    <aside>
        <?php include_once './modules/aside/linkAside.php'; ?>
    </aside>


    <main>
        <?php include("./pages/$page.php"); ?>
    </main>
    <footer>

    </footer>
</body>


</html>