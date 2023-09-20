<?php
include("php/link_db.php");
session_start();
// Vérification si la variable de session '$_SESSION' est définie

if(!empty($_SESSION)) {
    // Vérification si la clé 'isAdmin' existe dans la variable de session
    header("Refresh: 0;url=/");
}
// Vérification si des données ont été envoyées via POST
if(!empty($_POST)) {
    // Vérification si les clés 'mail' et 'password' existent dans les données POST
    if(array_key_exists('mail', $_POST) and array_key_exists('password', $_POST) and array_key_exists('isFormer', $_POST)) {
        echo 'a';
        // Récupération des valeurs des champs 'mail' et 'password' avec la fonction htmlspecialchars() pour éviter les attaques XSS
        $mail = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['password']);
        $isFormer = htmlspecialchars($_POST['isFormer']);

        if($isFormer == 0) {
            // Requête pour récupérer tous les utilisateurs
            $sql = "SELECT * FROM `users`";
            $requete = $db->query($sql);
            $users = $requete->fetchAll();
        } else if($isFormer == 1) {
            // Requête pour récupérer tous les utilisateurs
            $sql = "SELECT * FROM `formers`";
            $requete = $db->query($sql);
            $users = $requete->fetchAll();
        } else {
            header("Refresh: 0;url=/login.php?error=1");
        }

        // Boucle sur les utilisateurs pour vérifier les identifiants
        foreach($users as $user) {
            // Vérification de la correspondance entre l'adresse e-mail et le mot de passe avec ceux stockés en base de données
            if($mail == $user['mail_user'] and password_verify($password, $user['password_user'])) {
                // Début de la session et stockage des informations de l'utilisateur dans des variables de session
                $_SESSION['id_user'] = $user['id_user'];
                $_SESSION['name_user'] = $user['name_user'];
                $_SESSION['surname_user'] = $user['surname_user'];
                $_SESSION['mail_user'] = $mail;
                // Redirection vers la page d'administration ('/admin')
                header("Refresh: 0;url=/");
                // Arrêt de l'exécution du script
                die();
            } else {
                // Redirection vers la page de connexion avec un message d'erreur ('error=0')
                header("Refresh: 0;url=/login.php?error=0");
            }
        }
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

        <div class="form-sign-in-global-container">
            <div class="account-img">
                <img src="/images/account.svg" alt="Account illustration">
            </div>
            <div class="form-sign-in-container">
                <form action="" class="form-sign-in" method="POST">

                    <input type="text" id="name" name="name" required>
                    <label id="name-label" class="form-sign-in-label label-name" for="name">Nom</label>

                    <input type="text" id="surname" name="surname" required>
                    <label id="surname-label" class="form-sign-in-label label-surname" for="surname">Prenom</label>

                    <input type="int" id="age" name="age" required>
                    <label id="age-label" class="form-sign-in-label label-age" for="age">Âge</label>

                    <input type="text" id="level" name="level" required>
                    <label id="level-label" class="form-sign-in-label label-level" for="level">Niveau</label>

                    <input type="mail" id="mail" name="mail" required>
                    <label id="mail-label" class="form-sign-in-label label-mail" for="mail">Email</label>

                    <input type="password" id="password" name="password" required>
                    <label id="password-label" class="form-sign-in-label label-password" for="password">Mot de passe</label>

                    <input type="verif-password" id="verif-password" name="verif-password" required>
                    <label id="verif-password-label" class="form-sign-in-label label-verif-password" for="verif-password">Mot de passe</label>

                    <div class="radio-global-container">
                        <div>Formateur ? :</div>
                        <div class="radio-container">
                            <div class="radio">
                                <input id="isFormer0" type="radio" name="isFormer" value="0" required >
                                <label class="form-login-label-radio" for="isFormer0">Non</label>
                            </div>
                            <div class="radio">
                                <input id="isFormer1" type="radio" name="isFormer" value="1" required >
                                <label class="form-login-label-radio" for="isFormer1">Oui</label>
                            </div>
                        </div>
                    </div>

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