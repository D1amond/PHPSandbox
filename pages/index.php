<?php include('../entities/Product.php') ?>
<?php  

$product = new Product();
$product->name = 'canard';

?>
<?php include('common/header.php') ?>

    <?php include('common/nav.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="well">
                    <img class="avatar" src="http://www.bettafishcenter.com/img/Betta%20Image.jpg">
                    <label>Identifiant</label>
                    <label>Nombre de visites</label>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="#">Profil <span class="glyphicon glyphicon-user"></span></a>
                        <a class="btn btn-default" href="#">Mes achats <span class="glyphicon glyphicon-shopping-cart"></span></a>
                        <a class="btn btn-warning" href="#">Panneau d'administration <span class="glyphicon glyphicon-cog"></span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="well">
                    <h2>Nos Produits</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur luctus libero quis neque malesuada imperdiet. Cras ante orci, porta eget bibendum sit amet, tincidunt ac nunc. Maecenas eget sapien dolor. Curabitur vel lacinia nunc. Nullam eget felis et est egestas tincidunt. Cras et purus id massa eleifend imperdiet vel sed magna. Aenean lobortis non elit vel varius. Nulla eget ullamcorper enim.</p>
                    <a class="btn btn-primary" href="#">En savoir plus <span class="glyphicon glyphicon-share-alt"></span></a>
                </div>
            </div>
            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="http://media1.onsugar.com/files/2013/10/07/004/n/1922243/0e56200a1746a6ea_thumb.xxxlarge/i/Betta-Fish-Facts.jpg" alt="...">
                            <div class="carousel-caption">
                                Des poissons!
                            </div>
                        </div>
                        <div class="item">
                            <img src="http://www.aquariumfish.net/images_01/betta_male_crowntail_camb_100814c2_w0480.jpg">
                            <div class="carousel-caption">
                                D'autres poissons!
                            </div>
                        </div>
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

<?php include('common/footer.php') ?>