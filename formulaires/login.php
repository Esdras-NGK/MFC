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

    <div class="video-background">
      <video autoplay loop muted>
        <source src="video/lac-91562.mp4" type="video/mp4">
      </video>
      <div class="form-container">
        <form action="page/traitement.php" method="POST">
                <legend>Inscrivez-vous</legend>
                <label>Nom</label>
                <input type="text" name="nom" placeholder="Votre nom" required><br>
                <label>Prénom</label><br>
                <input type="text" name="prenom" placeholder="Votre prénom" required><br>
                <label>Email</label>
                <input type="email" name="email" placeholder="Votre mail" required><br>
                









                

                <label>Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Mot de passe" required minlength="8">
                <button type="button" id="toggle-password" aria-label="Afficher le mot de passe en clair">
                  <i class="fa fa-eye"></i>
                </button>

                <label>Confirmer votre mot de passe</label>
                <input type="password" id="password_confirm" name="password_confirm" placeholder="Confirmer votre mot de passe" required minlength="8">
                <button type="button" id="toggle-password-confirm" aria-label="Afficher le mot de passe en clair">
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
                </script>

























                
                
                






                



                
                <input type="submit" value="s'inscrire">
                
                <p>En cliquant sur le buton "S'inscrire" vous acceptez de vous conformer aux consitions suivantes <a href="page/mensionlegal.html">condition générales d'utilisation</a> and <a href="">Politique de confidentialité</a>/ &copy 2022 Net-Akila sarl Tous Droits Réservés <br> 
                </p>
                










                
            <div class="mot">
                <p>Vous avez déja un compte ? <a href="page/connexion.php">Connectez-vous ici</a></p>       
            </div>
                  <!-- les champs de votre formulaire ici -->
        </form>
      </div>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
</html>