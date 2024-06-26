<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleConnexion.css">
    <title>connexion</title>
    <!-- Favicon de la page -->
    <link rel="shortcut icon" href="../../image/LOGO.png">
</head>
<body>
    <?php if (isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } ?>

    <header class="block">
      <nav>
          <div class="logo"><a href="../../accueil.html"><img src="../../image/LOGO.png" alt="logo" title="Cliquez pour agrandir" /></a></div>
          <div class="onglet">
              <a href="../../accueil.html">accueil</a>
              <a href="../../html/Formation/entreprise.html">formation</a>
              <a href="../../html/domaine_formation/domaine_formation.html">domaine formation</a>
              <a href="connexion.php">Espace_personnel</a>
              <a href="../../html/apropos.html">A propos</a>
              <a href="../../html/Contact.html">Contact</a>
          </div>    
      </nav>

      <video autoplay="autoplay" muted="" loop="infinite" src="../video/connexion.mp4"></video>

      <div class="form-container2">
        <form action="con2.php" method="POST">
            <h1>Connectez-vous à la MFC</h1>

            <!-- les champs de votre formulaire ici -->
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="Votre mail" required>
            </div>
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="mot de passe" required minlength="8">
            </div>
            <input type="submit" value="valider">
            <p>Vous avez oubliez votre mote de passe <a href="mdpoublier.php">mot de passe oublié</a></p>

            <div class="mot">
                <p>Vous n'avez pas de compte ? <a href="../inscription_stagiaire.php">Inscrivez-vous ici</a></p>       
            </div>
        </form>
      </div>
    </header>

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
