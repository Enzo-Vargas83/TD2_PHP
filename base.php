<?php

    $dbLink = mysqli_connect(vargas_td2, vargas, lolo83520)
    or die('Erreur de connexion au serveur : ' . mysqli_connect_error());

    mysqli_select_db($dbLink , user) or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
    );


    $query = 'SELECT id, email, date FROM user';


?>