<?php



$NomS = $_POST['nom'];
$PrenomS = $_POST['prenom'];
$Tel_S = $_POST['number'];
$Adresse_S = $_POST['adresse'];
$Mail_S = $_POST['email'];
$Entreprise = $_POST['entreprise'];
$mdp = $_POST['password'];
$cmdp = $_POST['password_confirm'];


// Vérifier la correspondance des mots de passe
if ($mdp == $cmdp) {
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

        $NomS = $_POST['nom'];
        $PrenomS = $_POST['prenom'];
        $Tel_S = $_POST['number'];
        $Adresse_S = $_POST['adresse'];
        $Mail_S = $_POST['email'];
        $Entreprise = $_POST['entreprise'];
        $mdp = $_POST['password'];
        $cmdp = $_POST['password_confirm'];

        

        // Vérification des champs
        if (!empty($NomS) && !empty($PrenomS) && !empty($Tel_S) && !empty($Adresse_S) && !empty($Mail_S) && !empty($Entreprise) && !empty($mdp) && !empty($cmdp)) {

          // Vérification de la correspondance des mots de passe
          if ($mdp == $cmdp) {
            // Enregistrement des données dans la base de données
            $requete = "INSERT INTO stagiaires (NomS, PrenomS, Tel_S, Adresse_S, Mail_S, Entreprise, mdp, cmdp) VALUES ('$NomS', '$PrenomS', '$Tel_S', '$Adresse_S', '$Mail_S', '$Entreprise','$mdp', '$cmdp')";

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
