<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- MY CSS -->

    <link type="text/css" rel="stylesheet" href='assets/styles/s_utama.css'>

    <title><?php echo $title ?></title>
</head>

<body style="background-color: #eee">
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top py-2">
    <a class="navbar-brand" href="<?= base_url() ?>">Herbal Medical</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item <?= $active ?>">
                <a class="nav-link mx-2" href="<?= base_url() ?>">Disease</a>
            </li>
            <li class="nav-item mx-2 <?= $active2 ?>">
                <a class="nav-link" href="<?= base_url('DrugHerbal') ?>">Herbal Drugs</a>
            </li>
        </ul>
        <a href="<?= base_url('home/profile') ?>" style="margin-right: 15px"><img src="<?= base_url('assets/imgs/setting.png') ?>" alt="Setting" style="block-size: 32px"></a>
        <a class="btn btn-primary rounded-pill" href="<?= base_url('home/login') ?>" role="button">Login</a>
    </div>
</nav>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/imgs/mot.png') ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/imgs/mot2.png') ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
