<div class="navbar navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?= baseUrl() ?>">PHPSandbox</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?= baseUrl() ?>/pages/streams.php">Streams</a></li>
            </ul>
            <form id="loginForm" class="navbar-form navbar-right" role="form">
                <div class="form-group">
                    <input type="text" placeholder="Identifiant" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Mot de passe" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Connexion <span class="glyphicon glyphicon-log-in"></span></button>
            </form>
        </div><!--/.navbar-collapse -->
    </div>
</div>