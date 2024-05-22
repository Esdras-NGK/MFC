<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>connexion</title>
</head>
<body>
    <?php if (isset($error)) { ?>
        <div><?php echo $error; ?></div>
    <?php } 
    ?>


    <header class="block">

      <nav>
          <!-- <a href=""></a><div class="logo" ><a href=""><img src="" alt=""></a></div> -->
          <div class="logo"><a href="../../accueil.html"><img src="../../image/LOGO.png" alt="logo" title="Cliquez pour agrandir" /></a></div>
          <div class="onglet">
              <a href="accueil.html">accueil</a>
              <!-- <a href="html/Formation/entreprise.html">formation</a> -->

              <a href="../../html/domaine_formation/domaine_formation.html">domaine formation</a>
              <a href="../../formulaires/page/connexion.php">Espace_personnel</a>
              <a href="../../html/apropos.html">A propos</a>

          </div>    
      </nav>


      <video autoplay="autoplay" muted="" loop="infinite" src="../video/connexion.mp4"></video>
              <!-- <h1>MFC</h1> -->
              <!-- <h2>La voie de la connaissance</h2> -->
              <!-- <button><a href="#produits">Decouvrir</a></button> -->








              <div class="form-container2">
                <form action="con2.php" method="POST">
                        <h1>Connectez-vous à la MFC</h1>
                        <label>Email</label> <input type="email" name="email" placeholder="Votre mail" required><br>
                        


                        <label>mot de passe</label> <input type="password" id="password" name="password" placeholder="mot de passe" required required minlength="8"><br>
                    
                    
                            
                            <!-- <button type="button" onclick="showPassword()">Afficher le mot de passe</button>
                    
                            <script>
                                function showPassword() {
                                var passwordField = document.getElementById("password");
                                if (passwordField.type === "password") {
                                    passwordField.type = "text";
                                } else {
                                    passwordField.type = "password";
                                }
                                }
                            </script> -->

                            
                        <!-- <div class="motpass">
                            
                        </div> -->
                        
                            
                        
                        
                        
                        <!-- <label>Nom</label><input type="number" name="phone" placeholder="Votre numero de telephone"> -->
                        <input type="submit" value="valider">
        
        
                        <p>Vous avez oubliez votre mote de passe <a href="mdpoublier.php">mot de passe oublié</a> <br> 
                        </p>
                        
                        
                        
                    <div class="mot">
                        <p>Vous n'avez pas de compte ? <a href="../inscription_stagiaire.php">Inscrivez-vous ici</a></p>       
                    </div>
                          <!-- les champs de votre formulaire ici -->
                </form>
              </div>










                            
          </header>






    
      



    </header>





    <div class="video-background">
      
    </div>










    <footer class="footer">
      <div class="container">
          <div class="row">
              <div class="footer-col">
                  <h4>company</h4>
                  <ul>
                      <li><a href="#">about us</a></li>
                      <li><a href="#">our services</a></li>
                      <li><a href="#">privacy policy</a></li>
                      <li><a href="#">affiliate program</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>get help</h4>
                  <ul>
                      <li><a href="#">FAQ</a></li>
                      <li><a href="#">shipping</a></li>
                      <li><a href="#">returns</a></li>
                      <li><a href="#">order status</a></li>
                      <li><a href="#">payment options</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>online shop</h4>
                  <ul>
                      <li><a href="#">watch</a></li>
                      <li><a href="#">bag</a></li>
                      <li><a href="#">shoes</a></li>
                      <li><a href="#">dress</a></li>
                  </ul>
              </div>
              <div class="footer-col">
                  <h4>follow us</h4>
                  <div class="social-links">
                      <a href="#"><i class="fab fa-facebook-f"></i></a>
                      <a href="#"><i class="fab fa-twitter"></i></a>
                      <a href="#"><i class="fab fa-instagram"></i></a>
                      <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
          </div>
      </div>
 </footer>
  
    
</body>
</html>