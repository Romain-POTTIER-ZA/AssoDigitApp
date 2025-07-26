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

    </aside>


    <main>
        <form action="" method="POST" class="formLogin">
            <h1>Se connecter</h1>
            <div class="formGroup">
                <input type="email" id="email" class="formInput" placeholder=" ">
                <label for="email">Adresse e-mail</label>
            </div>

            <div class="formGroup">
                <input type="password" id="password" class="formInput" placeholder=" ">
                <label for="password">Mot de passe</label>
            </div>
            <div class="formGroup">
                <button type="submit">Connexion </button>
            </div>
        </form>
    </main>
    <footer>

    </footer>
</body>
<style>
body {
    grid-template-columns: 0px 1fr;
}
</style>


</html>