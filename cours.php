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
    <link rel="stylesheet" href="/style/cours.css">
</head>
<body>
    <header class="header">
        <?php include("php/header.php"); ?>
    </header>
    
    <main class="main">
        <div class="content">
            <div class="left-menu">
                <li>Vidéo</li>
                <li>Explication</li>
                <li>Exercice</li>
                <li>Pour approfondir</li>
            </div>
            <div class="right-content">
                <div class="rc1">
                    <div class="video-container">
                        <iframe src="https://www.youtube.com/embed/ZBqAyIbul0U" frameborder="0" ></iframe>
                    </div>
                    <div class="rc1b">
                        <img src="/images/pp1" alt="">
                        <p>Hector TechAlgo</p>
                    </div>
                </div> 
                <div class="rc2">
                    <p>
                        Bienvenue dans notre vidéo "Comment Structurer un Algorithme - Guide pour Débutants". Si vous êtes novice en programmation ou   que vous cherchez à renforcer vos bases, cette vidéo est faite pour vous !
                        Dans cette leçon instructive, nous allons explorer en détail les principes fondamentaux de la structuration d'un algorithme.    Que vous envisagiez de coder en Python, Java, C++, ou tout autre langage de programmation, les bases de la structuration d'un  algorithme restent les mêmes, et nous allons vous les expliquer de manière claire et accessible.
                    </p>
                    <h3>Explication</h3>
                    <div class="liste-exp">
                        <li>Qu'est-ce qu'un algorithme ? Nous commencerons par une introduction à la notion d'algorithme, en expliquant pourquoi ils sont essentiels dans la programmation et la résolution de problèmes.                            
                        </li>
                        <br>
                        <li>Les étapes de la structuration : Nous vous guiderons à travers les étapes de base pour concevoir un algorithme efficace, en mettant l'accent sur la compréhension du problème, la planification des étapes et la mise en œuvre.</li>
                        <br>
                        <li>La séquentialité : Nous verrons comment organiser vos instructions de manière séquentielle pour obtenir le résultat souhaité.</li>
                        <br>
                        <li>Les boucles et les conditionnelles : Vous découvrirez comment incorporer des boucles et des structures conditionnelles pour gérer différentes situations dans votre algorithme.</li>
                        <br>
                        <li>La modularité : Nous vous montrerons comment diviser votre algorithme en fonctions ou en modules réutilisables pour faciliter la maintenance et la compréhension.</li>
                        <br>
                        <li>La documentation : Enfin, nous aborderons l'importance de documenter votre code pour vous et pour les autres programmeurs.</li>
                        <br>
                    </div>
                    <h3>Explication</h3>
                    <h4>Description de l'Exercice</h4>
                    <ul class="liste-exp">
                        <li>Écrivez un algorithme simple qui prend deux nombres en entrée, les additionne, puis affiche le résultat.</li>
                        <li>Instructions :
                            <ul>
                                <li class="lis">Demandez à l'utilisateur de saisir le deuxième nombre (numéro 2).</li>
                                <li class="lis">Demandez à l'utilisateur de saisir le premier nombre (numéro 1).</li>
                                <li class="lis">Calculez la somme des deux nombres en utilisant une variable (somme).</li>
                                <li class="lis">Affichez le résultat de la somme à l'écran.</li>
                            </ul>
                        </li>
                        <li>Exemple :</li>
                        <img src="/images/exo.png" alt="">
                        </ul>
                </div>
                <div class="rc3">
                    <p>La structuration d'un algorithme est une compétence essentielle pour tout développeur en herbe. Elle sert de base à la résolution efficace de problèmes informatiques et à la création de programmes fonctionnels. Dans cette leçon, nous avons exploré les principes fondamentaux pour vous aider à démarrer. Cependant, si vous souhaitez aller plus loin et affiner vos compétences en structuration d'algorithmes, voici quelques ressources supplémentaires à explorer :<br><br><br>

                    1. Introduction à l'Algorithmique : Cet article vous offre une vue d'ensemble approfondie de ce qu'est l'algorithmique, de son importance et de                     ses applications dans le monde de la programmation.<br><br>

                    2. Algorithmes Séquentiels et Boucles : Approfondissez vos connaissances sur la séquentialité et les boucles dans les algorithmes. Comprenez                    comment ces concepts sont utilisés pour gérer des tâches répétitives.<br><br>

                    3. Structures Conditionnelles : Explorez les structures conditionnelles telles que les déclarations "if" et "else". Apprenez comment elles vous                     permettent de prendre des décisions dans votre algorithme en fonction de conditions spécifiques.<br><br>
                    4. La Modularité en Programmation : Découvrez comment diviser un algorithme en modules réutilisables, ce qui facilite la maintenance du code et                     favorise la réutilisation.<br><br>

                    5. L'Art de la Documentation du Code : La documentation est souvent négligée, mais elle est cruciale pour collaborer avec d'autres programmeurs et                  pour comprendre son propre code à l'avenir. Apprenez les bonnes pratiques de documentation.<br><br>

                    6. Exercices Pratiques : Mettez en pratique vos compétences en structuration d'algorithmes en résolvant une variété d'exercices concrets. C'est un                  excellent moyen de renforcer vos connaissances.<br><br><br>
                    En explorant ces ressources complémentaires, vous deviendrez un maître de la structuration des algorithmes. N'oubliez pas que la pratique                   régulière est la clé pour devenir un programmeur compétent, alors essayez de créer vos propres algorithmes et de résoudre des problèmes du monde                réel pour continuer à progresser. Bonne exploration et bonne programmation ! 🚀<br><br><br></p>
                </div>       
            </div>
        </div>
    </main>

    <footer class="footer">
        <?php include("php/footer.php"); ?>
    </footer>
</body>
</html>