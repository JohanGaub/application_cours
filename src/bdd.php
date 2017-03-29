<?php
/*
 * à return mysqli
 */
function getConnection()
{
    // au préalable j'ai créé ma BDD avec SQL WORKBENCH. La BDD s'appelle user, l'utilisateur est "root" et la table sera "profile"
    $user       = "root";
    $password   = "03122908j&j";
    $db         = "user";
    $host       = "localhost";
    // je créé les variables de connection avec leurs valeurs
    $mysqli = new mysqli($host, $user, $password, $db);
    if ($mysqli->connect_errno){
        echo "Failed to connect to MYSQL, damned !! (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        die();
    }
    return $mysqli;
}
    //je créé une variable dans les valeurs sont les variables de connection
    // et si la connection mysqli renvoie un code erreur
    // alors affiche ce numéro d'erreur et le fait renvoyer le message d'erreur provenant de $mysqli
    // ET DIE !!!
    // et retourne la variable $mysqli qui EST ma connection et me permet de me connecter
// POURQUOI PAS DE ELSE et RETURN ==> PARCE QUE APRES DIE, PAS BESOIN CAR CA TERMINE LE PROGRAMME

    // mysqli_connect_errno — Retourne le code d'erreur de la connexion MySQL . mysqli_connect_errno Retourne le message d'erreur de connexion MySQL


function execSql($mysqli, $sql){
    if (!$result = $mysqli->query($sql)){
        echo "Failed to run query : (" . $mysqli->errno . ") " . $mysqli->error;
        die();
    }
    return $result;
    // je créé la fonction execSql (QUI VA INTERROGER LA BD ET RENVOYER UNE REPONSE) avec comme variable $mysqli (la connection) et $sql (la chaîne de caractère sql : INSERT INTO...)

    // si la fonction query de REQUETE SQL de $sql renvoie un résultat mauvais
    // alors j'affiche "impossible de lancer la requete + le numero d'erreur issu de $mysqli + l'explication de l'erreur issue de mysqli
    // et j'arrete tout = DIE
    // et je retourne ce qui se trouve dans la variable $result

    //mysqli_errno — Retourne le dernier code d'erreur produit. mysqli_error — Retourne une chaîne décrivant la dernière erreur
}

