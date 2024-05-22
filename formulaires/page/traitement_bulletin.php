<?php









$NomS = $_POST['nom'];
$PrenomS = $_POST['prenom'];
$Tel_S = $_POST['number'];
$Adresse_S = $_POST['adresse'];
$Mail_S = $_POST['email'];
$Entreprise = $_POST['entreprise'];
$Intitul = $_POST['nom_Formation'];
$DateInscr = $_POST['DateInscr'];




  

// Vérifier la correspondance des mots de passe
// if ($mdp_user == $cmp_user) {
    // Se connecter à la base de données
    $user = 'root';
    $password = '';
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

        
        $DateInscr = $_POST['DateInscr'];

          // $NomS = $_POST['nom'];
          // $PrenomS = $_POST['prenom'];
          // $Tel_S = $_POST['number'];
          // $Adresse_S = $_POST['adresse'];
          // $Mail_S = $_POST['email'];
          // $Entreprise = $_POST['entreprise'];
          // $Intitul = $_POST['nom_Formation'];
          


        

        // Vérification des champs
        if (!empty($NomS) && !empty($PrenomS) && !empty($Tel_S) && !empty($Adresse_S) && !empty($Mail_S) && !empty($Entreprise) && !empty($Intitul)) {

          // Vérification de la correspondance des mots de passe
          // if ($mdp_user == $cmp_user) {
            // Enregistrement des données dans la base de données
            $sql1 = "INSERT INTO stagiaires (NomS, PrenomS, Tel_S, Adresse_S, Mail_S, Entreprise) VALUES ('$NomS', '$PrenomS', '$Tel_S', '$Adresse_S','$Mail_S', '$Entreprise')";
            $sql2 = "INSERT INTO formations (DescriptionF, Intitul, Tarif_F, Dur?e_F) VALUES ( '', $Intitul', '', '')";

            // Exécution des requêtes
            if ($connexion->query($sql1) === TRUE && $connexion->query($sql2) === TRUE) {
              echo "Les deux requêtes INSERT ont été exécutées avec succès. Les données ont bien été enregistrées";
            } else {
              echo "Erreur : " . $connexion->error;
            }
            // if (mysqli_query($connexion, $requete1, $requete2)) {
            //   echo "Les données ont bien été enregistrées.";
            // } else {
            //   echo "Erreur: " . $requete1 . $requete2. "<br>" . mysqli_error($connexion);
            // }






          // } else {
          //   echo "Les mots de passe ne correspondent pas.";
          // }
        } else {
          echo "Veuillez remplir tous les champs du formulaire.";
        }
      }









    // Fermer la connexion à la base de données
    mysqli_close($connexion);
// } else {
//     echo "Les mots de passe ne correspondent pas.";
// }





?>







