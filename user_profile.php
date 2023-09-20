<?php
session_start();

if(empty($_SESSION)) {
    // Vérification si la clé 'isAdmin' existe dans la variable de session
    header("Refresh: 0;url=/login.php?error=2");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("php/head.php"); ?>
    <title>Workshop Sn2</title>
    <link rel="stylesheet" href="/style/user_profile.css">
</head>
<body>
    <header class="header">
        <?php include("php/header.php"); ?>
    </header>
    
    <main class="main">
        <div class="block-1">
            <h2>Initiation au code</h2>
        </div>
        <div class="content">
            <div class="left-menu">
                <li>Les bases de l'aglorithmie</li>
                <li>Introduction à la programmation en python</li>
                <li>Les bases de la programmation Java</li>
                <li>Les Fondamentaux du Codage HTML et CSS</li>
            </div>
            <div class="right-content">
                <img src="/images/capt1" alt="">
                <img src="/images/capt2" alt="">
            </div>
        </div>
    </main>

    <footer class="main">
        <?php include("php/footer.php"); ?>
    </footer>
</body>
</html>