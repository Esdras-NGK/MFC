<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style2.css">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>

   <?php if (isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } 
  ?> 

    <header class="block">
      <nav>
          <div class="logo"><a href="../accueil.html"><img src="../image/LOGO.png" alt="logo" title="Cliquez pour agrandir" /></a></div>
          <div class="onglet">
              <a href="../accueil.html">accueil</a>
              <a href="../html/Formation/entreprise.html">formation</a>
              <a href="../html/domaine_formation/domaine_formation.html">domaine formation</a>
              <a href="page/connexion.php">Espace_personnel</a>
              <a href="../html/apropos.html">A propos</a>
              <a href="../html/Contact.html">Contact</a>
          </div>    
      </nav>

      <video autoplay="autoplay" muted="" loop="infinite" src="video/connexion.mp4"></video>
        <div class="form-container2">
                <form action="page/traitement_stagiaire.php" method="POST">
                    <H1>INSCRIPTION STAGIAIRE</H1>

                      <!-- les champs de votre formulaire ici -->

                      <div class="nom">
                          <label>Nom</label>
                          <input type="text" name="nom" placeholder="Votre nom" required><br>
                          <label>Prénom</label><br>
                          <input type="text" name="prenom" placeholder="Votre prénom" required><br>   
                      </div>
                      <div class="nom2">
                          <label>tel</label>
                          <input type="number" name="number" placeholder="Votre numero de telephone" required><br>
                          <label>adresse</label>
                          <input type="text" name="adresse" placeholder="Votre adresse" required><br>
                      </div>
                      <div class="nom">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Votre mail" required><br>
                        
                        
                        <label>Entreprise</label>
                        <input type="text" name="entreprise" placeholder="Votre adresse" required><br>
                      </div>
                      
                      

                      <div class="mdp">
                        <label>Mot de passe</label><input type="password" id="password" name="password" placeholder="Mot de passe" required minlength="8">

                            <label>Confirmer votre mot de passe</label>
                            <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmer votre mot de passe" required minlength="8">
                            

                        </div>

    
                        <input type="submit" value="s'inscrire">
                        
                        <p>En cliquant sur le buton "S'inscrire" vous acceptez de vous conformer à la <a href="../html/politiqueconfidentialité.html">politique de confidentialité</a> / &copy 2022 MFC sarl Tous Droits Réservés <br> 
                        </p>
                        

                    <div class="mot">
                        <p>Vous avez déja un compte ? <a href="page/connexion.php">Connectez-vous ici</a></p>       
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
                        <li><a href="../html/Formation/en_ligne.html">Formation en ligne</a></li>
                        <li><a href="../html/Formation/entreprise.html">Formation en entreprise</a></li>
                        <li><a href="../html/domaine_formation/domaine_formation.html">Nos domaines de formations</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Compagnie</h4>
                    <ul>
                        <li><a href="../html/apropos.html">A propos</a></li>
                        <li><a href="../html/politiqueconfidentialité.html">politique de confidentialité</a></li>
                        <li><a href="../doc/Bulletin d'inscription.docx" download="Bulletin d'inscription.docx">Télécharger le bulletin d'inscription</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Besoin d'aide</h4>
                    <ul>
                        <li><a href="../html/Contact.html">Formulaire de Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

       <h5>/ &copy 2022 MFC sarl Tous Droits Réservés</h5>
    </footer>
    
  </body>
</html>