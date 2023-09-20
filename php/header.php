<div class="nav">
    <ul class="nav-list" id="nav">
        <div class="nav-list-left">
            <li class="nav-item"><a href="" class="nav-link">Formations <div class="triangle"></div> </a>
                <div class="dropdown-menu-cache"></div>
                <div class="dropdown-menu menu-formations">
                    <div class="formation-content-top"><p>Formations <span class="baumans-font">Learn IT</span></p></div>
                    <div class="formation-content-bottom">
                        <div class="formation-content">
                            <div class="title-formation-content">• Découverte</div>
                            <div class="txt-formation-content">
                                Qu'est ce que l'informatique ? <br>
                                Informatique : Par où Commencer ? <br>
                                Comprendre Internet et la Navigation Web <br>
                                Introduction à la Programmation pour Débutants
                            </div>
                        </div>
                        <div class="formation-content">
                            <div class="title-formation-content">• Initiation au code</div>
                            <div class="txt-formation-content">
                                Les bases de l'algorithmie <br>
                                Introduction à la Programmation en Python <br>
                                Les Bases de la Programmation Java <br>
                                Les Fondamentaux du Codage HTML et CSS
                            </div>
                        </div>
                        <div class="formation-content">
                            <div class="title-formation-content">• Projet</div>
                            <div class="txt-formation-content">
                                Votre premier site <br>
                                Votre première appli <br>
                                Votre premier jeu
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item"><a href="" class="nav-link">Ressources <div class="triangle"></div> </a>
                <div class="dropdown-menu-cache"></div>    
                <div class="dropdown-menu menu-ressourses">
                    <div class="formation-content-top"><p>Ressources <span class="baumans-font">Learn IT</span></p></div>
                    <div class="formation-content-bottom">
                        <div class="formation-content">
                            <div class="title-formation-content">• Outils</div>
                            <div class="txt-formation-content">
                                Qu'est ce que VScode <br>
                                Qu'est ce que GitHub <br>
                                Sur quelles plateformes coder ? <br>
                                Bibliothèque de code
                            </div>
                        </div>
                        <div class="formation-content">
                            <div class="title-formation-content">• Communauté</div>
                            <div class="txt-formation-content">
                                Meilleurs cours de la communauté <br>
                                Forum <br>
                                Groupe de discussion <br>
                                Actualités informatique
                            </div>
                        </div>
                        <div class="formation-content">
                            <div class="title-formation-content">• Qui sommes nous ?</div>
                            <div class="txt-formation-content">
                                Qu'est ce que LearnlT ? <br>
                                Notre projet <br>
                                Nos motivations
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </div>
        <div class="nav-list-center">
            <li class="nav-item logo"><a href="/" class="logo-txt">Learn IT</a></li>
        </div>
        <div class="nav-list-right">
            <?php
            if(!empty($_SESSION)) {
                // Vérification si la clé 'isAdmin' existe dans la variable de session
                if (array_key_exists('name', $_SESSION)) {
                    // Vérification si la valeur de 'isAdmin' est égale à 1 (administrateur)
                    echo "<li class=\"nav-item\"><a href=\"/login.php\" class=\"\">Se connecter</a></li>";
                }
            } else {
                echo "<li class=\"nav-item\"><a href=\"/login.php\" class=\"\">Se connecter</a></li>
                <li class=\"nav-item\"><a href=\"/sign-in.php\" class=\"\">S'inscrire</a></li>";
            }
            ?>
        </div>
    </ul>
</div>