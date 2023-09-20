<?php
session_start();

if(empty($_SESSION)) {
    // Vérification si la clé 'isAdmin' existe dans la variable de session
    header("Refresh: 0;url=/login.php?error=2");
} else {
    if($_SESSION['isFormer'] == 0) {
        header("Refresh: 0;url=/");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="/style/page-formation.css">
<head>
    <?php include("php/head.php"); ?>
    <title>Workshop Sn2</title>
</head>
<body>
    <header class="header">
        <?php include("php/header.php"); ?>
    </header>
    
</div>
    <main class="main">
        <div class="global-element">
            <div class="navbar">
                <div class="first-item">
                    <p>Formations</p>
                </div>
                <div class="second-item">
                    <p>Statistiques</p>
                </div>
            <div class="third-item">
                <p>Infos</p>
            </div>
            <div class="fourth-item">
                <p>Sécurité</p>
            </div>
        </div>
        <div class="container">
            <div class="first-photo">
                <img src="images/first-video" alt="photo de la formation">
            </div>
            <div class="second-photo">
                <img src="images/second-video" alt="photo de la formation">
            </div>
            <div class="first-photo">
                <img src="images/third-video" alt="photo de la formation">
            </div>
        </div>
    </main>

    <footer class="main">
        <?php include("php/footer.php"); ?>
    </footer>
</body>
</html>