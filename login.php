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

        <div class="form-login-global-container">
            <div class="account-img">
                <img src="/images/account.svg" alt="Account illustration">
            </div>
            <div class="form-login-container">
                <form action="" class="form-login" method="POST">
                    <input id="mail" type="mail">
                    <label id="mail-label" class="form-login-label label-mail label-active" for="mail">Email</label>
                    <input id="password" type="password">
                    <label id="password-label" class="form-login-label label-password label-active" for="password">Mot de passe</label>
                    <a href="" class="forget-password">Mot de passe oublié ?</a>
                    <input type="submit" value="Se connecter">
                </form>
            </div>
        </div>

        <script src="/js/formLogin.js"></script>
    </main>

    <footer class="main">
        <?php include("php/footer.php"); ?>
    </footer>
</body>
</html>