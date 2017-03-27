<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'):

    print_r('<pre>');
    var_dump($_POST);
    print_r('</pre>');

else:
?> <!--si la methode de requete serveur est le parametre POST alors renvoie la valeur de la variable $_POST -->




<div class="row">
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
        <form action="" method="post" role="form">
            <legend>Formulaire de contact</legend>

            <div class="form-group">
                <label for="">Prénom</label>
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Entrez votre prénom">
            </div>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Entrez votre nom">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Entrez votre email">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
</div>

<?php endif ?>