<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("php/head.php"); ?>
    <link rel="stylesheet" href="/style/login.css">
    <title>Workshop Sn2</title>
</head>
<body>
    <header class="header">
        <?php include("php/header.php"); ?>
    </header>
    
    <main class="main">
        <div class="circle-global-container">
            <div class="circle-top-container">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
            <div class="circle-bottom-container">
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
                <div class="circle"></div>
            </div>
        </div>

        <div class="form-sign-in-global-container">
            <div class="account-img">
                <img src="/images/account.svg" alt="Account illustration">
            </div>
            <div class="form-sign-in-container">
                <form action="" class="form-sign-in" method="POST">

                    <input type="text" id="name" name="name">
                    <label id="name-label" class="form-sign-in-label label-name" for="name">Nom</label>

                    <input type="text" id="surname" name="surname">
                    <label id="surname-label" class="form-sign-in-label label-surname" for="surname">Prenom</label>

                    <input type="int" id="age" name="age">
                    <label id="age-label" class="form-sign-in-label label-age" for="age">Âge</label>

                    <input type="text" id="level" name="level">
                    <label id="level-label" class="form-sign-in-label label-level" for="level">Niveau</label>

                    <input type="mail" id="mail" name="mail">
                    <label id="mail-label" class="form-sign-in-label label-mail" for="mail">Email</label>

                    <input type="password" id="password" name="password">
                    <label id="password-label" class="form-sign-in-label label-password" for="password">Mot de passe</label>

                    <input type="verif-password" id="verif-password" name="verif-password">
                    <label id="verif-password-label" class="form-sign-in-label label-verif-password" for="verif-password">Mot de passe</label>

                    <input type="submit" value="Se connecter">
                </form>
            </div>
        </div>

        <script src="/js/formSignIn.js"></script>
        
    </main>

    <footer class="main">
        <?php include("php/footer.php"); ?>
    </footer>
</body>
</html>