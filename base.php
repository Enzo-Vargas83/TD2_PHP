<?php

    $dbLink = mysqli_connect(mysql-vargas.alwaysdata.net, vargas, lolo83520)
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink , user) or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
    );

    $query = 'SELECT Num_tel, Pays date FROM user';


    if (!($dbResult = mysqli_query($dbLink, $query))) {
        echo 'Erreur de requête<br/>';
        // Affiche le type d'erreur.
        echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
        // Affiche la requête envoyée.
        echo 'Requête : ' . $query . '<br/>';
        exit();
    }

    while($dbRow = mysqli_fetch_assoc($dbResult))
    {
        echo $dbRow['Num_tel'] . '<br/>';
        echo $dbRow['Pays'] . '<br/>';
        echo '<br/><br/>';

    }

?>