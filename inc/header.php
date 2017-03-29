<div class="row">
    <nav class="navbar navbar-default" role="navigation">
        <a class="navbar-brand" href="#">Mon site qui pète</a>
        <ul class="nav navbar-nav">
            <li <?php if($page == 'index'): echo 'class="active"'; endif ?>><a href="/">Home</a></li> <!-- quand je clique, si la valeur de la variable $page = index alors class active de bootstrap REMEMBER que je l'ai faite avec Laurent-->
            <li <?php if($page == 'list'): echo 'class="active"'; endif ?>><a href="/?page=list">Liste</a></li>
            <li <?php if($page == 'contact'): echo 'class="active"'; endif ?>><a href="/?page=contact">Contact</a></li>
        </ul>
    </nav>
</div>