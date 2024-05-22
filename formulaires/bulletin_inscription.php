<?php
// $user = 'root';
// $password = '';
// $db = 'mfc';
// $host = 'localhost';
// // $port = 3307;

// $connexion = mysqli_connect($host, $user, $password, $db);

// // Vérifier si la connexion a réussi
// if (!$connexion)  {
//     die("La connexion a échoué : " . mysqli_connect_error());
// }



// $requete = "SELECT IDF, DescriptionF, Intitul, Tarif_F, Duree_F	FROM formations";
// // $result = $connexion->query($sql);
// $resultat = mysqli_query($connexion, $requete);


// // $connexion->close();




// // if ($result->num_rows > 0) {
// //     echo "<select>";
// //     // Afficher les données de chaque ligne
// //     while($row = $result->fetch_assoc()) {
// //       echo "<option value='".$row["colonne1"]."'>".$row["colonne2"]."</option>";
// //     }
// //     echo "</select>";
// //   } else {
// //     echo "0 résultats";
// //   }
  
?>
























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
            <!-- <a href=""></a><div class="logo" ><a href=""><img src="" alt=""></a></div> -->
            <div class="logo"><a href="../accueil.html"><img src="../image/LOGO.png" alt="logo" title="Cliquez pour agrandir" /></a></div>
            <div class="onglet">
                <a href="../accueil.html">accueil</a>
                <!-- <a href="html/Formation/entreprise.html">formation</a> -->

                <a href="../html/domaine_formation/domaine_formation.html">domaine formation</a>
                <a href="../formulaires/page/connexion.php">Espace_personnel</a>
                <a href="../html/apropos.html">A propos</a>

            </div>    
        </nav>


        <video autoplay="autoplay" muted="" loop="infinite" src="video/mylivewallpapers.com-Evening-Sun-and-Star.mp4"></video>

                <!-- <h1>MFC</h1> -->
                <!-- <h2>La voie de la connaissance</h2> -->
                <!-- <button><a href="#produits">Decouvrir</a></button> -->




    

        <div class="form-container2">
                <form action="page/traitement_bulletin.php" method="POST">
                <H1>BULLETIN D'INSCRIPTION</H1>


                  <h2>STAGIAIRE</h2>
                  
                        <div class="nom">
                          <label>Nom</label>
                          <input type="text" name="nom" placeholder="Votre nom" required>
                        
                          <label>Prénom</label>
                          <input type="text" name="prenom" placeholder="Votre prénom" required>  
                        
                          
                        </div>
                        <div class="nom2">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Votre mail" required>

                            <label>tel</label>
                            <input type="number" name="number" placeholder="Votre numero de telephone" required>
                            <!-- <label>adresse</label>
                            <input type="text" name="adresse" placeholder="Votre adresse" required><br> -->
                            
                        </div>
                        <div class="nom">
                            <label>adresse</label>
                            <input type="text" name="adresse" placeholder="Votre adresse" required><br>
                            
                            <!-- <label>adresse</label><input type="text" name="adress" placeholder="Votre adress" required> -->

                            <!-- <label>tel</label><input type="number" name="number" placeholder="Votre numero de telephone" required> -->
                            <!-- <label>adresse</label>
                            <input type="text" name="adresse" placeholder="Votre adresse" required><br> -->
                            <label>Entreprise</label>
                            <input type="text" name="entreprise" placeholder="Votre adresse" required><br>

                        </div>
                        
                        
                       
                        
                        <!-- <label>Entreprise</label>
                        <input type="text" name="entreprise" placeholder="Votre adresse" required><br> -->
                        









                        <h2>FORMATION</h2>
                        
                        <div class="mdp">
                            <label>nom Formation</label>
                            <!-- <input type="text" id="text" name="formation" placeholder="Mot de passe" required minlength="8"> -->


                        <div class='' >
                            <div class="nom_Formation" style="padding: 4%;">

                            <button id="cat"><p>nom_Formation</p></button>
                            <div id="cube" style="background-color: #f1f1f1;">
                                <a href="ecran.php" id="p3">Management des SI</a><br>
                                <a href="jeu.php" id="p3">Formation Système réseau et sécurité</a>
                                <a href="ecran.php" id="p3"> des SI</a><br>
                            </div>





                            <!-- <select name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select> -->

                            </div>


                            

                        </div>
                            


                            <label for="birthday">Birthday:</label>
                            <input type="date" id="DateInscr" name="birthday">
                            

                            <!-- <label>Confirmer votre mot de passe</label><input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmer votre mot de passe" required minlength="8"> -->

                            <!-- <button type="button" id="toggle-password-confirm" aria-label="Afficher le mot de passe en clair">
                            <i class="fa fa-eye"></i>
                            </button>

                            <script>
                            const togglePasswordBtn = document.querySelector('#toggle-password');
                            const togglePasswordConfirmBtn = document.querySelector('#toggle-password-confirm');
                            const passwordField = document.querySelector('#password');
                            const passwordConfirmField = document.querySelector('#password_confirm');

                            togglePasswordBtn.addEventListener('click', () => {
                            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
                            passwordField.setAttribute('type', type);
                            togglePasswordBtn.querySelector('i.fa').classList.toggle('fa-eye-slash');
                            });

                            togglePasswordConfirmBtn.addEventListener('click', () => {
                            const type = passwordConfirmField.getAttribute('type') === 'password' ? 'text' : 'password';
                            passwordConfirmField.setAttribute('type', type);
                            togglePasswordConfirmBtn.querySelector('i.fa').classList.toggle('fa-eye-slash');
                            });
                            </script> -->






                            <?php 
                            
                            // if ($resultat === false) {
                            //     // La requête a échoué
                            //     echo "Erreur : " . $connexion->error;
                            //   } else {
                            //     // La requête a réussi
                            //     if ($resultat->num_rows > 0) {
                            //         //   // Afficher les données de chaque ligne
                            //         //   while($row = $resultat->fetch_assoc()) {
                            //         //     // echo "id: " . $row["IDF "]. " - Nom: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
                            //         //     echo "<option value='".$row["colonne1"]."'>".$row["colonne2"]."</option>";
        
                            //         //   }
                            //         //   echo "</select>";
                            //             echo "<select>";
                            //             // Afficher les données de chaque ligne
                            //             while($row = $result->fetch_assoc()) {
                            //                 echo "<option value='".$row["IDF"]."'id'".$row["firstname"]."</option>";

                            //             }
                            //             echo "</select>";
                            //         } else {
                            //       echo "0 résultats";
                            //     }
                                
                                
                            //         echo "0 résultats";
                            //         }
                            // ?>

                        </div>

                        
                    
                        

























                        
                        
                        






                        



                        
                        <input type="submit" value="s'inscrire">
                        
                        <p>En cliquant sur le buton "S'inscrire" vous acceptez de vous conformer aux consitions suivantes <a href="page/mensionlegal.html">condition générales d'utilisation</a> and <a href="">Politique de confidentialité</a>/ &copy 2022 Net-Akila sarl Tous Droits Réservés <br> 
                        </p>


                  
                                       










                        
                    <div class="mot">
                        <p>Vous avez déja un compte ? <a href="page/connexion.php">Connectez-vous ici</a></p>       
                    </div>
                        <!-- les champs de votre formulaire ici -->
                </form>
      </div>



                






      










                          
    </header>








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
 


































    <!-- <div class="video-background">
      <video autoplay loop muted>
        <source src="video/lac-91562.mp4" type="video/mp4">
      </video>
      
    </div> -->

  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>