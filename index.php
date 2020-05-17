<?php
    require_once 'vendor/autoload.php';

    use SSYT\Auth\AuthController;
    use SSYT\Support\{PageContent, PageSubmit};
    use SSYT\Models\User;
    use SSYT\Models\PlayerList;

    $app = new PlayerList();
    $auth = new AuthController();
    $router = new PageSubmit();
    $user = new User();

    $router->get('action', function () use ($user) {
        $user->addPlayer(['post' => $_REQUEST]);
    });

    $router->get('delete', function () use ($user) {
        return $user->removePlayer($_REQUEST['delete']);
    });
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&amp;family=Roboto+Slab:wght@500;600;700&amp;display=swap" rel="stylesheet">
    <link href="style.css" rel="stylesheet" />

    <title>MIX.UXG.RO</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">MIX.UXG.RO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse ml-auto" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                <?php if(!$auth->getAdmin()): ?>
                    <a class="nav-item nav-link" href="index.php?method=login">Login</a>
                <?php else: ?>
                    <a class="nav-item nav-link" href="index.php?method=banned">Adauga Jucator</a>
                    <a class="nav-item nav-link" href="index.php?method=logout">Logout</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="center">
            <div class="neon">
                <span class="text">MIX.UXG.RO</span>
                <span class="gradient"></span>
                <span class="spotlight"></span>
            </div>

            <div class="deconstructed">
                DECONSTRUCTED
                <div>JUCATORI INTERZISI</div>
                <div>JUCATORI INTERZISI</div>
                <div>JUCATORI INTERZISI</div>
                <div>JUCATORI INTERZISI</div>
            </div>
        </div>

        <?php PageContent::view(isset($_GET['method']) ? $_GET['method'] : 'index'); ?>
    </div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
