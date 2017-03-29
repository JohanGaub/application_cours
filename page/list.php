<?php
    require "src/bdd.php";

    $sql    = "SELECT * FROM profile"; // je créé la variable $sql qui contient tous les enregistrements de la TABLE profile
    $mysqli = getConnection(); // je créé la variable smsqli qui contient la fonction de connection getConnection()
    $data   = execSql($mysqli, $sql); // dans $data je mets la fonction execSql() avec les valeurs de toute la table profile + la fonction de connection
// EST-CE QUE FORCEEMENT, pour accéder aux données, il faut créer
?>
<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">Liste des contacts</div>
            <table class="table">
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Email</th>
                </tr>
                <?php foreach($data as $record): ?> <!-- dans chaque tableau $data, sort la variable $record-->
                    <tr>
                        <td><?php echo $record['firstname'];?></td> <!-- de la variable $record, sort firstname-->
                        <td><?php echo $record['lastname'];?></td>
                        <td><?php echo $record['email'];?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
</div>


