<?php
    if(isset($_GET['addContact']))
    {
        if($_GET['addContact'] == "ok"):?>
        <!--<div class="alert">
        	<button type = "button" class="close" data-dismiss = "alert" aria-hidden = "true" >&times;</button >
        	<strong >Added profile</strong > Whaou ! You have just scared me...
        </div >-->
        <div class="alert alert-success" role="alert">
            <b>thanks</b>
            Your contact has been recorded in our database !
        </div>
    <?php endif;
    }
?>




<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <div class="jumbotron">
            <div class="container">
                <h1>Yeaah, the Home is alive !</h1>
                <p>This is the most basic site in procedural PHP</p>
                <p>
                    <a class="btn btn-primary btn-lg">Learn more</a>
                </p>
            </div>
        </div>
    </div>
</div>