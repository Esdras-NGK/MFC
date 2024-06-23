<?php









$nom_user = $_POST['nom'];
$prenom_user = $_POST['prenom'];
$tel_user = $_POST['number'];
$mail_user = $_POST['email'];
$mdp_user = $_POST['password'];
$cmp_user = $_POST['password_confirm'];




  

// Vérifier la correspondance des mots de passe
if ($mdp_user == $cmp_user) {
    // Se connecter à la base de données
    $user = 'root';
    $password = 'Root';
    $db = 'mfc';
    $host = 'localhost';
    // $port = 3307;

    $connexion = mysqli_connect($host, $user, $password, $db);

    // Vérifier si la connexion a réussi
    if (!$connexion)  {
        die("La connexion a échoué : " . mysqli_connect_error());
    }








          // Traitement du formulaire
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $nom_user = $_POST['nom'];
        $prenom_user = $_POST['prenom'];
        $tel_user = $_POST['number'];
        $mail_user = $_POST['email'];
        $mdp_user = $_POST['password'];
        $cmp_user = $_POST['password_confirm'];

        

        // Vérification des champs
        if (!empty($nom_user) && !empty($prenom_user) && !empty($tel_user) && !empty($mail_user) && !empty($mdp_user) && !empty($cmp_user)) {

          // Vérification de la correspondance des mots de passe
          if ($mdp_user == $cmp_user) {
            // Enregistrement des données dans la base de données
            $requete = "INSERT INTO user (nom_user, prenom_user, tel_user, mail_user, mdp_user, cmp_user) VALUES ('$nom_user', '$prenom_user', '$tel_user', '$mail_user','$mdp_user', '$cmp_user')";

            if (mysqli_query($connexion, $requete)) {
              echo "Les données ont bien été enregistrées.";
            } else {
              echo "Erreur: " . $requete . "<br>" . mysqli_error($connexion);
            }
          } else {
            echo "Les mots de passe ne correspondent pas.";
          }
        } else {
          echo "Veuillez remplir tous les champs du formulaire.";
        }
      }









    // Fermer la connexion à la base de données
    mysqli_close($connexion);
} else {
    echo "Les mots de passe ne correspondent pas.";
}





?>







