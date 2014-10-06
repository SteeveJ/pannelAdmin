<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <!-- condition pour ajouter un menu modulaire quand on est connecter -->
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right" method="GET">
                <!-- formulaire de connexion -->
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="login" name="loginUser">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="passwordUser">
                </div>
                <button type="submit" class="btn btn-default">Connexion</button>
                <!-- condition avec le role de connexion -->

            </form>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>