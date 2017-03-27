<?php
    $page = (isset($_GET['page']) ? $_GET['page'] : 'index');
    // je créé un varaible $page qui à chaque fois que je clique sur une page, si elle qui existe, renvoie la page sinon je renvoie INDEX
    // ainsi, je peux faire un switch qui renvoie le bon titre de page

    $file = $page . '.php';
    // $file prend la valeur de la page que j'ai choisi $page + .php
    // ainsi, je peux faire un include de $file qui me renverra la bonne page
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">
    <link rel="stylesheet"
          href="css/main.css">
    <title>
        <?php
            switch($page){
                case 'index':
                    echo 'Home page';
                    break;
                case 'contact':
                    echo 'Contactez-nous';
                    break;
            }
        ?>
    </title>
</head>
<body>
    <header>
        <?php include 'inc/header.php'; ?>
    </header>

    <main>
        <div class="container-fluid">
            <?php include "page/$file"; ?>
        </div>
    </main>

    <footer>
        <?php include 'inc/footer.php'; ?>
    </footer>







<script src="https://code.jquery.com/jquery-3.1.1.js"
        integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA="
        crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous">
</script>
</body>
</html>