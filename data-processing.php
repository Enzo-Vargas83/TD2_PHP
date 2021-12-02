<?php

$action = $_POST['action'];
$email = $_POST['email'];
if ($action == 'mailer') {
    $message .= 'Email : ' . $email . PHP_EOL;
}
else {
    echo '<br/><strong>Bouton non géré !</strong><br/>';
}
?>