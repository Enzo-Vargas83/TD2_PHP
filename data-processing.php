<?php
 if (!empty($_POST)) {
     $action = $_POST['action'];
     $id = $_POST['identifiant'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $pays = $_POST['pays'];
     $num = $_POST['numtel'];
     $genre = $_POST['sexe'];
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

     }
     $dbLink = mysqli_connect('mysql-vargas.alwaysdata.net', 'vargas', 'lolo83520', 'vargas_td2');
     $query = 'INSERT INTO user (pays, Num_tel, mail, Genre) VALUES (\'' . $pays . '\', \''
         . $num . '\',\'' . $email . '\', \'' . $genre . '\')';

     if (!($dbResult = mysqli_query($dbLink, $query))) {
         echo 'Erreur dans requête<br />';
         // Affiche le type d'erreur.
         echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
         // Affiche la requête envoyée.
         echo 'Requête : ' . $query . '<br/>';
         exit();
     }


 }
?>