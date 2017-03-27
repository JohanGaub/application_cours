<?php

if(isset($_GET['majeur']))
{
    if($_GET['majeur'] == 'oui'){
        echo "Tu es un grand garçon";
    }else{
        echo "Mange de la soupe mon grand";
    }
}

?>


<body>
<head>
    <title>
        Unknown
    </title>
</head>



Etes-vous majeur ?
<a href="test2.php?majeur=oui&age=2">Oui</a>
<a href="test2.php?majeur=non">Non</a>








<nav>
    <ul>
        <li><a href="lien1">lien 2</a></li>

    </ul>
</nav>


</body>



</html>