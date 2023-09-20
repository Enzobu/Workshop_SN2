<?php

// Vérification si la variable de session '$_SESSION' est définie
if(!empty($_SESSION)) {
    // Vérification si la clé 'isAdmin' existe dans la variable de session
    if (array_key_exists('isAdmin', $_SESSION)) {
        // Vérification si la valeur de 'isAdmin' est égale à 1 (administrateur)
        if($_SESSION['isAdmin'] == 1) {
            // Redirection vers la page d'administration ('/admin')
            header("Refresh: 0;url=/admin");
        }
    }
}

// Vérification si des données ont été envoyées via POST
if(!empty($_POST)) {
    // Vérification si les clés 'mail' et 'password' existent dans les données POST
    if(array_key_exists('mail', $_POST) and array_key_exists('password', $_POST)) {
        // Récupération des valeurs des champs 'mail' et 'password' avec la fonction htmlspecialchars() pour éviter les attaques XSS
        $mail = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['password']);

        // Requête pour récupérer tous les utilisateurs
        $sql = "SELECT * FROM `	utilisateur`";
        $requete = $db->query($sql);
        $users = $requete->fetchAll();

        // Boucle sur les utilisateurs pour vérifier les identifiants
        foreach($users as $user) {
            // Vérification de la correspondance entre l'adresse e-mail et le mot de passe avec ceux stockés en base de données
            if($mail == $user['users_mail'] and password_verify($password, $user['users_password'])) {
                // Début de la session et stockage des informations de l'utilisateur dans des variables de session
                session_start();
                $_SESSION['id_utilisateur'] = $user['id_utilisateur'];
                $_SESSION['nom_utilisateur'] = $user['nom_utilisateur'];
                $_SESSION['mail_utilisateur	'] = $mail;
                $_SESSION['isAdmin'] = $user['users_isAdmin'];
                // Redirection vers la page d'administration ('/admin')
                header("Refresh: 0;url=/admin/");
                // Arrêt de l'exécution du script
                die();
            } else {
                // Redirection vers la page de connexion avec un message d'erreur ('error=0')
                header("Refresh: 0;url=/admin/login.php?error=0");
            }
        }
    }
}

// Vérification si des données ont été envoyées via GET
if(!empty($_GET)) {
    // Vérification si la clé 'destroy' existe dans les données GET
    if(array_key_exists('destroy', $_GET)) {
        // Destruction de la session
        session_start();
        session_destroy();
        // Redirection vers la page d'accueil ('/')
        header("Refresh: 0;url=/");
        // Arrêt de l'exécution du script
        die();
    }
}

// Variable pour stocker un message d'erreur
$error_message = '';

// Vérification si la clé 'error' existe dans les données GET
if(array_key_exists('error', $_GET)) {
    // Vérification de la valeur de 'error'
    if($_GET['error'] == '0') {
        $error_message = 'Identifiant ou mot de passe incorrect !';
    }
}

?>

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