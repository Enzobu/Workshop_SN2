<div class="nav">
    <ul class="nav-list" id="nav">
        <div class="nav-list-left">
            <li class="nav-item"><a href="/user_profile" class="nav-link">Formations <div class="triangle"></div> </a>
                <div class="dropdown-menu-cache"></div>
                <div class="dropdown-menu menu-formations">
                    <div class="formation-content-top"><a href=""><p>Formations <span class="baumans-font">Learn IT</span></p></a></div>
                    <div class="formation-content-bottom">
                        <div class="formation-content">
                            <div class="title-formation-content">• Découverte</div>
                            <div class="txt-formation-content">
                                <a href=""><div class="formation-item">Qu'est ce que l'informatique ?</div></a>
                                <a href=""><div class="formation-item">Informatique : Par où Commencer ?</div></a>
                                <a href=""><div class="formation-item">Comprendre Internet et la Navigation Web</div></a>
                                <a href=""><div class="formation-item">Introduction à la Programmation pour Débutants</div></a>
                            </div>
                        </div>
                        <div class="formation-content">
                            <div class="title-formation-content">• Initiation au code</div>
                            <div class="txt-formation-content">
                                <a href="/cours.php"><div class="formation-item">Les bases de l'algorithmie</div></a>
                                <a href=""><div class="formation-item">Introduction à la Programmation en Python</div></a>
                                <a href=""><div class="formation-item">Les Bases de la Programmation Java</div></a>
                                <a href=""><div class="formation-item">Les Fondamentaux du Codage HTML et CSS</div></a>
                            </div>
                        </div>
                        <div class="formation-content">
                            <div class="title-formation-content">• Projet</div>
                            <div class="txt-formation-content">
                                <a href=""><div class="formation-item">Votre premier site</div></a>
                                <a href=""><div class="formation-item">Votre première appli</div></a>
                                <a href=""><div class="formation-item">Votre premier jeu</div></a>
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
                                <div class="formation-item">Qu'est ce que VScode</div>
                                <div class="formation-item">Qu'est ce que GitHub</div>
                                <div class="formation-item">Sur quelles plateformes coder ?</div>
                                <div class="formation-item">Bibliothèque de code</div>
                            </div>
                        </div>
                        <div class="formation-content">
                            <div class="title-formation-content">• Communauté</div>
                            <div class="txt-formation-content">
                                <div class="formation-item">Meilleurs cours de la communauté</div>
                                <div class="formation-item">Forum</div>
                                <div class="formation-item">Groupe de discussion</div>
                                <div class="formation-item">Actualités informatique</div>
                            </div>
                        </div>
                        <div class="formation-content">
                            <div class="title-formation-content">• Qui sommes nous ?</div>
                            <div class="txt-formation-content">
                                <div class="formation-item">Qu'est ce que LearnlT ?</div>
                                <div class="formation-item">Notre projet</div>
                                <div class="formation-item">Nos motivations</div>
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
                    if($_SESSION['isFormer'] == 1) {
                        echo "<li class=\"nav-item\"><a href=\"/formation.php\" class=\"\">Mon espace</a></li>";
                    } else {
                        echo "<li class=\"nav-item\"><a href=\"/user_profile.php\" class=\"\">Mon espace</a></li>";
                    }
                    echo "<li class=\"nav-item\"><a href=\"/login.php?destroy=\" class=\"\">Déconnexion</a></li>";
                } else {
                    echo "<li class=\"nav-item\"><a href=\"/login.php\" class=\"\">Se connecter</a></li>
                    <li class=\"nav-item\"><a href=\"/sign-in.php\" class=\"\">S'inscrire</a></li>";
                }
            ?>
        </div>
    </ul>
</div>
