<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("php/head.php"); ?>
    <title>Workshop Sn2</title>
    <link rel="stylesheet" href="/style/index.css">
</head>
<body>
    <header class="header">
        <?php include("php/header.php"); ?>
    </header>
    
    <main class="main">
        <div class="block-1">
            <div class="block-1-left">
                <p>Découvrez <span>Learn IT, </span><br>votre pass pour le monde numérique.</p>
            </div>
            <div class="block-1-right">
                <img src="/images/right-1" alt="" class="r1">
                <img src="/images/right-2" alt="" class="r2">                
            </div>
        </div>
        <div class="block-2">
            <div class="block-2-left">
                <img src="/images/left-1" alt="" class="l1">
                <img src="/images/left-2" alt="" class="l2">
            </div>
            <div class="block-2-right">
                <p>Profitez de centaines de leçons gratuites et pour tous les niveaux.</p>
                <button>Go fo IT</button>
            </div>
        </div>
        <div class="block-3">
            <div class="block-3-haut">
                <h2>Qui sommes nous ?</h2>
            </div>
            <div class="block-3-bas">
                <img src="/images/bas-1" alt="" class="b1">
                    <p>
                        Learn It est bien plus qu'une plateforme de formation en ligne.
                        C'est une initiative passionnée et altruiste qui vise à rendre 
                        l'informatique accessible à tous, en fournissant gratuitement 
                        des cours, des tutoriels, des vidéos et des quiz. Notre mission 
                        est de briser les barrières de l'accès à l'informatique, en particulier 
                        pour les personnes défavorisées. Chez Learn It, nous sommes déterminés à 
                        créer des opportunités pour un avenir meilleur dans le monde numérique
                    </p>
                </img>
                <img src="/images/bas-left" alt="" class="b2">
                <img src="/images/bas-right" alt="" class="b3">
                <img src="/images/bas-left" alt="" class="b4">
                <img src="/images/bas-right" alt="" class="b5">
                
            </div>
        </div>
    </main>

    <footer class="main">
        <?php include("php/footer.php"); ?>
    </footer>
</body>
</html>