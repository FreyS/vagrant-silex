<?php //the default navbar for every website ?>
<!DOCTYPE html>
<html lang="en">

<?php //important files get load in like stylsheet from bootstrap, jquery ?>
<head>
    <title><?= "$title" ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
    <script src="/vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home">PokéBlog</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li <?= $active == 'home' ? 'class="active"' : '' ?>>
                    <a class="glyphicon glyphicon-adjust" href="/home"> Training</a>
                </li>
                <li <?= $active == 'blog' ? 'class="active"' : '' ?>>
                    <a class="glyphicon glyphicon-align-justify" href="/blog"> Pokédex</a>
                </li>
                <li <?= $active == 'newblog' ? 'class="active"' : '' ?>>
                    <a class="glyphicon glyphicon-play-circle" href="/newblog"> NewPokémon</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <span class="caret"></span> Trainerpass
                    </button>
                    <ul class="dropdown-menu">
                        <li>Trainer Name</li>
                        <li>
                            <div class="form-group">
                                <input type="text" class="form-control">
                            </div>
                        </li>
                        <li>Trainer Passwort</li>
                        <li>
                            <div class="form-group">
                                <input type="text" class="form-control">
                            </div>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/home">Stürz dich in das Abenteuer</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php $view['slots']->output('_content') ?>

<footer class="bs-docs-footer">
    <div class="container-fluid">
        <div class="col-sm-offset-4 col-sm-4">
            <div class="glyphicon glyphicon-copyright-mark"> Coppyright Ash Ketchum</div>
        </div>
    </div>
</footer>

</body>
</html>
