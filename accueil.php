<?php 
// Vérifiez si l'utilisateur est connecté
session_start();
if (isset($_SESSION['email'])) {
    header("Location: accueil.php"); // Redirigez vers la page personnalisée si l'utilisateur est connecté
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Définir le jeu de caractères utilisé -->
    <meta charset="UTF-8">
    <!-- Configurer la fenêtre de visualisation pour s'adapter à la largeur de l'appareil -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Lien vers le fichier de style CSS externe -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Titre de la page -->
    <title>MFC</title>
    <!-- Favicon de la page -->
    <link rel="shortcut icon" href="image/LOGO.png">
</head>
<body>
    <!-- Début du header de la page -->
    <header class="block">
        <!-- Barre de navigation -->
        <nav>
            <!-- Logo de l'entreprise avec un lien vers la page d'accueil -->
            <div class="logo"><a href="accueil2.html"><img src="image/LOGO.png" alt="logo" title="Cliquez pour agrandir" /></a></div>
            <!-- Onglets de navigation -->
            <div class="onglet">
                <a href="accueil2.html">accueil</a>
                <a href="html/Formation/entreprise.html">formation</a>
                <a href="html/domaine_formation/domaine_formation.html">domaine formation</a>
                <a href="formulaires/page/monCompte.php">Espace_personnel</a>
                <a href="html/apropos.html">A propos</a>
                <a href="html/Contact.html">Contact</a>
            </div>    
        </nav>
        <!-- Vidéo d'arrière-plan en boucle et sans son -->
        <video autoplay="autoplay" muted="" loop="infinite" src="accueil1.mp4"></video>
        <!-- Titres principaux de la page -->
        <h1>MFC</h1>
        <h2>La voie de la connaissance</h2>
        <!-- Bouton de découverte -->
        <button><a href="/html/apropos.html">Decouvrir</a></button>
    </header>
    <section>
        <!-- Section des valeurs de l'école -->
        <div class="valeurs">
            <div class="Valeurs_contenue">
                <div class="Intro">
                    <h1>LE MOT DU PRÉSIDENT</h1>
                    <p>Dans un espace de formation entièrement réservé aux adultes, la Maison de la Formation Continue s'est dotée d'une organisation qui lui permet d'optimiser les temps de formation. En effet, la culture pédagogique de notre entreprise repose sur la capitalisation des savoirs fondamentaux et des savoir-faire pédagogiques que nous développons en permanence.</p>
                    
                </div>
                <div class="Valeur_image">
                    <img src="image/Main_dans_la_main.jpg" alt="Handshaking" width="500px;" height="400px;">
                    
                </div>
            </div>




            <div class="valeurs-section">
                <h1>Nos Valeurs</h1>
                <p>Ces valeurs constituent le "ciment" de la MFC et illustrent la réalité de notre ambition : transformer et enrichir la vie des individus.</p>
                <div class="valeurs-container">
                    <div class="valeur-item">
                        <img src="image/Icon/Passion_icon.png" alt="Passion">
                        <h2>Passion</h2>
                        <p>même qualité de service sur tous les sites</p>
                    </div>
                    <div class="valeur-item">
                        <img src="image/Icon/Innovation_icon.png" alt="Innovation">
                        <h2>Innovation</h2>
                        <p>communiquer les découvertes et nouveautés</p>
                    </div>
                    <div class="valeur-item">
                        <img src="image/Icon/Client_icon.png" alt="Orientation Client">
                        <h2>Orientation Client</h2>
                        <p>créer de la valeur pour le client, construire ensemble</p>
                    </div>
                    <div class="valeur-item">
                        <img src="image/Icon/Respect_icon.png" alt="Respect">
                        <h2>Respect</h2>
                        <p>progresser ensemble</p>
                    </div>
                </div>
            </div>




            
            
        </div>
        <!-- Section des caractéristiques de l'école représentées par des chiffres -->
        <div class="Chiffres">
            <h1>La MFC en quelques chiffres</h1>
            <div class="nombres">
                <div><p><b>10</b> <br>années d’expérience</p></div>
                <div><p><b>15000</b> <br>stagiaires formés par an</p></div>
                <div><p><b>5</b> <br>Présente dans grandes villes</p></div>
                <div><p><b>100</b> <br>Un réseau de plus de formateurs et de consultants experts</p></div>
                <div><p><b>200</b> <br>Un catalogue de formations adaptables</p></div>
                <div><p>Des cursus certifiant</p></div>
            </div>
        </div>
        <!-- Section des types de formations -->
        <div class="formation">
            <h1>Nos formations</h1>
            <div class="formations">
                <!-- Bouton de formation en entreprise -->
                <button class="bouton"><h1><a href="html/Formation/entreprise.html">en entreprise</a></h1></button>
                <!-- Bouton de formation en ligne -->
                <button class="bouton2"><h1><a href="html/Formation/en_ligne.html">en ligne</a></h1></button>
            </div>
        </div>
        <!-- Section des lieux de formation -->
        <div class="endroit">
            <h1>PLUSIEURS SITES EN FRANCE</h1>
            <p>UNE ÉQUIPE DE 80 FORMATEURS ET CONSULTANTS A VOTRE SERVICE <br> PLUSIEURS SITES DE FORMATION POUR PLUS DE PROXIMITÉ</p>
            <div class="formations">
                <div class="text"></div>
                <!-- Image illustrant les sites de formation -->
                <div class="formation2">
                    <img src="image/Capture d'écran 2023-10-20 101931.png" alt="" width="400px;" height="350px;">
                </div>
            </div>
        </div>


    </section>



    <!-- Pied de page -->
    <footer class="footer">
        <div class="footer_contenue">
            <div class="row">
                <div class="footer-col">
                    <h4>Nos offres</h4>
                    <ul>
                        <li><a href="html/Formation/en_ligne.html">Formation en ligne</a></li>
                        <li><a href="html/Formation/entreprise.html">Formation en entreprise</a></li>
                        <li><a href="html/domaine_formation/domaine_formation.html">Nos domaines de formations</a></li>


                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Compagnie</h4>
                    <ul>
                        <li><a href="html/apropos.html">A propos</a></li>
                        <li><a href="html/politiqueconfidentialité.html">politique de confidentialité</a></li>
                        <li><a href="doc/Bulletin d'inscription.docx" download="Bulletin d'inscription.docx">Télécharger le bulletin d'inscription</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Besoin d'aide</h4>
                    <ul>
                        <li><a href="html/apropos.html">FAQ</a></li>
                        <li><a href="html/Contact.html">Formulaire de Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    
</body>
</html>


