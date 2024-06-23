<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
/*Classe de traitement des exceptions et des erreurs*/
require  '../../../../../PHPMailer/PHPMailer_master/PHPMailer_master/src/Exception.php';
/*Classe-PHPMailer*/
require '../../../../../PHPMailer/PHPMailer_master/PHPMailer_master/src/PHPMailer.php';
/*Classe SMTP nécessaire pour établir la connexion avec un serveur SMTP*/
require '../../../../../PHPMailer/PHPMailer_master/PHPMailer_master/src/SMTP.php';
/*Lors de la création d’un objet PHPMailer, passez le paramètre "true" pour activer les exceptions (messages en cas d’erreur)*/
$mail = new PHPMailer(true);

// Vérification que le formulaire a été soumis via la méthode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Création d'une nouvelle instance de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Tentative de création d’une nouvelle instance de la classe PHPMailer, avec les exceptions activées
        $mail = new PHPMailer(true);
        
        // Paramètres du serveur
        $mail->SMTPDebug = 2;                                 
        $mail->isSMTP();
        $mail->SMTPAuth = true;
    
        // Informations personnelles
    
        $mail->Host ='smtp.gmail.com'; 
        $mail->Port = 587;             
    
        $mail->Username = "contact.mfc02@gmail.com";
        $mail->Username = "contact.mfc02@gmail.com";
        $mail->Password = "wrwf eaeb yitx uujv";
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;             
    
        $mail->setFrom($_POST['email'], $_POST['name']);
        //-----------------------------------------------------------------
    
        // $mail->setFrom('ngoulhoudk@gmail.com', 'Esdras');
        // $mail->addAddress($_POST['to']);  
        //------------------------------------------------------
    
    
        // Remplacer par l’adresse e-mail du destinataire
        $mail->addAddress("contact.mfc02@gmail.com"); 
       
    
        $mail->isHTML(true);                
        $mail->Subject = $_POST['subject'];
        $mail->Body    = $_POST['body'];
    
        $mail->CharSet = 'UTF-8';
        $mail->Encoding = 'base64';

        //----------------------------------------------------------------------
        // $mail->Body = 'Le texte de votre email en HTML. Il est également possible des mettre des éléments en <b>gras</b>, par exemple.';
        // $mail->AltBody = 'Le texte comme simple élément textuel';
        //------------------------------------------------------------------------


        // Envoi de l'e-mail
        $mail->send();
        echo "Message envoyé avec succès!";

    
    
    
    
    
    
    
    } catch (Exception $e) {
        //throw $th;
        // En cas d'erreur, affichage du message d'erreur

        echo "Message non envoyé. Mailer Error: ".$e->getMessage();
    }


} else {
    // Si le formulaire n'a pas été soumis via POST, affichage d'une erreur
    echo "Erreur: Le formulaire doit être soumis par la méthode POST.";
}






//  Pour accéder facilement à PHPMailer, a
// ssurez-vous d’abord que les espaces de noms sont correctement intégrés. Pour cela, on utilise la déclaration use. Ainsi, votre code doit contenir les lignes suivantes :





?>