<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleConnexion.css">
    <title>connexion</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
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



    <?php if (isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } 
    ?>
    <div class="form-container2">
        <form action="recuperermdep.php" method="POST">
                <legend>recuperer_mot_de_passe-vous</legend>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Votre mail" required><br>
                




                <label>Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required minlength="8">
                

                <label>Confirmer votre mot de passe</label>
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmer votre mot de passe" required minlength="8">
                

                
                <!-- <label>Nom</label><input type="number" name="phone" placeholder="Votre numero de telephone"> -->
                <input type="submit" value="valider">


        
                
                
                
            <div class="mot">
                <p>Vous n'avez pas de compte ? <a href="../login.php">Inscrivez-vous ici</a></p>       
            </div>
                  <!-- les champs de votre formulaire ici -->
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