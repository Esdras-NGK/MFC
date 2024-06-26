<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Mon compte</title>
    <!-- Favicon de la page -->
    <link rel="shortcut icon" href="../../image/LOGO.png">
</head>
<body>
    <?php if (isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } ?>

    <header class="block">
      <nav>
          <div class="logo"><a href="../../accueil.php"><img src="../../image/LOGO.png" alt="logo" title="Cliquez pour agrandir" /></a></div>
          <div class="onglet">
              <a href="../../accueil.php">accueil</a>
              <a href="../../html/Formation/entreprise.html">formation</a>
              <a href="../../html/domaine_formation/domaine_formation.html">domaine formation</a>
              <a href="connexion.php">Espace_personnel</a>
              <a href="../../html/apropos.html">A propos</a>
              <a href="../../html/Contact.html">Contact</a>
          </div>    
      </nav>

      <video autoplay="autoplay" muted="" loop="infinite" src="../video/connexion.mp4"></video>

      <!-- Titres principaux de la page -->
      <h1>Mon compte</h1>
        <h2>Veillez télécharger le bulletin d'inscription qui ci-dessous</h2>
        <!-- Bouton de découverte -->
        <button><a href="../../doc/Bulletin d'inscription.docx" download="Bulletin d'inscription.docx">Bulletin d'inscription</a></button>
    </header>
    <section>
        <!-- Section des valeurs de l'école -->
        <div class="valeurs">
            <div class="Valeurs_contenue">
                <div class="Intro">
m
                    <h1>LE MOT DU PRÉSIDENT</h1>
                    <p>Dans un espace de formation entièrement réservé aux adultes, la Maison de la Formation Continue s'est dotée d'une organisation qui lui permet d'optimiser les temps de formation. En effet, la culture pédagogique de notre entreprise repose sur la capitalisation des savoirs fondamentaux et des savoir-faire pédagogiques que nous développons en permanence.</p>
                    
                </div>
                <div class="Valeur_image">
                    <img src="image/Main_dans_la_main.jpg" alt="Handshaking" width="500px;" height="400px;">
                    
                </div>
            </div>
    </section>








<!-- 
      <div class="form-container2">
        <form action="con2.php" method="POST">
            <h1>Connectez-vous à la MFC</h1>

            <div class="form-group">

                <label>Veillez télécharger le fichier :</label>
                <li><a href="../../doc/Bulletin d'inscription.docx" download="Bulletin d'inscription.docx">Bulletin d'inscription</a></li>

            </div>
        
        </form>
      </div>
    </header> -->

    <footer class="footer">
        <div class="footer_contenue">
            <div class="row">
                <div class="footer-col">
                    <h4>Nos offres</h4>
                    <ul>
                        <li><a href="../../html/Formation/en_ligne.html">Formation en ligne</a></li>
                        <li><a href="../../html/Formation/entreprise.html">Formation en entreprise</a></li>
                        <li><a href="../../html/domaine_formation/domaine_formation.html">Nos domaines de formations</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Compagnie</h4>
                    <ul>
                        <li><a href="../../html/apropos.html">A propos</a></li>
                        <li><a href="../../html/politiqueconfidentialité.html">politique de confidentialité</a></li>
                        <li><a href="../../doc/Bulletin d'inscription.docx" download="Bulletin d'inscription.docx">Télécharger le bulletin d'inscription</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Besoin d'aide</h4>
                    <ul>
                        <li><a href="../../html/Contact.html">Formulaire de Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
