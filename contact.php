<?php
    // S'il y des données de postées
    if ($_SERVER['REQUEST_METHOD']=='POST') {
     
      // (1) Code PHP pour traiter l'envoi de l'email
     
      // Récupération des variables et sécurisation des données
      $nom = htmlentities($_POST['nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
      $entreprise = htmlentities($_POST['entreprise']);
      $mail = htmlentities($_POST['email']);
      $message = htmlentities($_POST['message']);
     
      // Variables concernant l'email
     
      $destinataire = 'marie.lagrange@openways.fr'; // Adresse email du webmaster (à personnaliser)
      $contenu .= '<p>Tu as un nouveau message !</p>';
      $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
      $contenu .= '<p><strong>Entreprise</strong>: '.$entreprise.'</p>';
      $contenu .= '<p><strong>Email</strong>: '.$mail.'</p>';
      $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
      $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
     
      // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
      $headers = 'MIME-Version: 1.0'."\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
     
      // Envoyer l'email
      $envoi = mail($destinataire, $entreprise, $contenu, $headers); // Fonction principale qui envoi l'email
      header("location:index.php#formu"); // Afficher un message pour indiquer que le message a été envoyé
      // (2) Fin du code pour traiter l'envoi de l'email
   
   
    }

    
    ?>

