<?php
 if (!empty($_POST)) {
     $action = $_POST['action'];
     $id = $_POST['identifiant'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $pays = $_POST['pays'];
     $num = $_POST['numtel'];
     if ($action == 'mailer') {

         $message = 'Voici vos identifiants d\'inscription :' . $id . PHP_EOL;
         $message .= 'Email : ' . $email . PHP_EOL;
         echo $message;

         $from = $email;
         $to = "enzovargaspro83520@gmail.com";
         $subject = "test";
         $headers = "De :" . $from;
         mail($to, $subject, $message, $headers);
         echo "<br> L'email a été envoyé <br/>";
     } else {
         echo '<br/><strong>Bouton non géré !</strong><br/>';

         $query = 'INSERT INTO user (pays, Num_tel) VALUES (\'' . $pays . '\', \''
             . $num . '\', ' . … . ')';
     }

     require 'base.php';
 }
?>