<body>
<head>
    <title>
        Test $_GET
    </title>
</head>

<nav>
    <ul>
        <li><a href="suite.php?nom=mario">mario</a></li>
        <li><a href="suite.php?nom=superman">superman</a></li>
        <li><a href="suite.php?nom=spiderman">spiderman</a></li>
        <li><a href="suite.php?nom=cedric">cedric</a></li>
    </ul>
</nav>

<h1>Bonjour <? echo $_GET['nom']; ?></h1>

</body>



</html>