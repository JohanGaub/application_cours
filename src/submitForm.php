<?php

require "bdd.php"; // require est identique à include mise à part le fait que lorsqu'une erreur survient, il produit également une erreur fatale de niveau E_COMPILE_ERROR. En d'autres termes, il stoppera le script alors que include n'émettra qu'une alerte de niveau E_WARNING, ce qui permet au script de continuer.

$firstname  = $_POST['firstname'];
$lastname   = $_POST['lastname'];
$email      = $_POST['email'];
// dans chaque variable ci dessus, j'insère la valeur qui arrive après appuie sur le bouton = SUBMIT

$conn   = getConnection();
// je créé ma variable $conn dans laquelle se trouve la fonction getConnection qui vient de bdd.php avec 1) les variables de connections 2)  la connection 3) le test de connection qui renvoie des erreurs si pas bon.

$sql    = "INSERT INTO profile (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email');";
// je créé une variable avec la valeur d'un nouvel enregistrement

execSql($conn, $sql);
// je créé la fonction execSql qui contient les variables $conn de connection et $sql d'ajout d'un enregistrement

header('Location: /?page=index&addcontact=ok');
//JE NE COMPRENDS PAS !!







