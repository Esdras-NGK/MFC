
<?php
















// Récupérer les valeurs saisies dans le formulaire de connexion
$Mail_S = $_POST['email'];
$mdp = $_POST['password'];

// / require_once 'config.php';
// Se connecter à la base de données
$user = 'root';
$password = 'Root';
$db = 'mfc';
$host = 'localhost';
// $port = 3307;

$connexion = mysqli_connect($host, $user, $password, $db, $port);

// Vérifier si la connexion a réussi
if (!$connexion) {
    die("La connexion a échoué : " . mysqli_connect_error());
}

// Vérifier les informations d'identification saisies dans le formulaire de connexion
$requete = "SELECT * FROM stagiaires WHERE Mail_S = '$Mail_S' AND mdp = '$mdp'";
$resultat = mysqli_query($connexion, $requete);

if (!$resultat) {
    die("La requête a échoué : " . mysqli_error($connexion));
}

// Si la requête renvoie un résultat, cela signifie que les informations d'identification sont valides
if (mysqli_num_rows($resultat) > 0) {
    // Autoriser l'utilisateur à accéder à votre application
    echo "Connexion réussie. Vous allez être redirigé vers le site de bulletin d'inscription dans 5 secondes...";
    header("refresh:5;url=../bulletin_inscription.php");
    exit();
} 
else {
    // Sinon, afficher un message d'erreur indiquant que les informations d'identification sont invalides
    echo "Les informations d'identification saisies sont invalides.";
}

// Fermer la connexion à la base de données
mysqli_close($connexion);












?>