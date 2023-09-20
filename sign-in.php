<?php
include("php/link_db.php");
session_start();
// Vérification si la variable de session '$_SESSION' est définie

if(!empty($_SESSION)) {
    // Vérification si la clé 'isAdmin' existe dans la variable de session
    header("Refresh: 0;url=/");
    die();
}
// Vérification si des données ont été envoyées via POST
if(!empty($_POST)) {
    // Vérification si les clés 'mail' et 'password' existent dans les données POST
    if(array_key_exists('name', $_POST) and 
    array_key_exists('surname', $_POST) and 
    array_key_exists('age', $_POST) and 
    array_key_exists('level', $_POST) and 
    array_key_exists('mail', $_POST) and 
    array_key_exists('password', $_POST) and 
    array_key_exists('verif-password', $_POST) and 
    array_key_exists('isFormer', $_POST)) {
        // Récupération des valeurs des champs 'mail' et 'password' avec la fonction htmlspecialchars() pour éviter les attaques XSS
        $name = htmlspecialchars($_POST['name']);
        $surname = htmlspecialchars($_POST['surname']);
        $age = htmlspecialchars($_POST['age']);
        $level = htmlspecialchars($_POST['level']);
        $mail = htmlspecialchars($_POST['mail']);
        $password = htmlspecialchars($_POST['password']);
        $verifPassword = htmlspecialchars($_POST['verif-password']);
        $isFormer = htmlspecialchars($_POST['isFormer']);

        if($password == $verifPassword) {
            if($isFormer == 0) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                // Requête pour récupérer tous les utilisateurs
                $sql = "INSERT INTO `users`
                        (`name_user`, `surname_user`, `mail_user`, `password_user`, `birthYears_user`, `level_user`)
                        VALUES 
                        ('$name','$surname','$mail','$password','$age','$level')";
                $requete = $db->query($sql);
                header("Refresh: 0;url=/");
                die();
            } else if($isFormer == 1) {
                $password = password_hash($password, PASSWORD_DEFAULT);
                // Requête pour récupérer tous les utilisateurs
                $sql = "INSERT INTO `formers`
                        (`name_former`, `surname_former`, `mail_former`, `password_former`, `birth_years_former`, `speciality_former`) 
                        VALUES 
                        ('$name','$surname','$mail','$password','$age','$level')";
                $requete = $db->query($sql);
                header("Refresh: 0;url=/");
                die();
            } else {
                header("Refresh: 0;url=/login.php?error=1");
                die();
            }
        }
    }
}

// Variable pour stocker un message d'erreur
$error_message = '';

// Vérification si la clé 'error' existe dans les données GET
if(array_key_exists('error', $_GET)) {
    // Vérification de la valeur de 'error'
    if($_GET['error'] == '1') {
        $error_message = 'Case non cochée';
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
        <div class="sign-in-space"></div>
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

                    <input type="date" id="age" name="age" placeholder="" required>
                    <label id="age-label" class="form-sign-in-label label-age" for="age">Date de naissance</label>

                    <input type="text" id="level" name="level" required>
                    <label id="level-label" class="form-sign-in-label label-level" for="level">Niveau (spécialité pour formateurs)</label>

                    <input type="mail" id="mail" name="mail" required>
                    <label id="mail-label" class="form-sign-in-label label-mail" for="mail">Email</label>

                    <input type="password" id="password" name="password" required>
                    <label id="password-label" class="form-sign-in-label label-password" for="password">Mot de passe</label>

                    <input type="password" id="verif-password" name="verif-password" required>
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

                    <div class="error-message"><?php echo $error_message; ?></div>
                    <input type="submit" value="Se connecter">
                </form>
            </div>
        </div>

        <script src="/js/formSignIn.js"></script>
        
    </main>

    <footer class="footer">
        <?php include("php/footer.php"); ?>
    </footer>
</body>
</html>