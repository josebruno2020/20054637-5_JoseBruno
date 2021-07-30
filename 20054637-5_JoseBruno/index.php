<?php
session_start();
require('./functions/routes.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <?php if(isset($css)): ?>
    <link rel="stylesheet" href="css/<?=$css;?>">
    <?php endif; ?>
    <title>Site <?= $title != '' ? '-' : ''; ?> <?=$title;?></title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
            <div class="container-fluid">
               
                <a class="navbar-brand" href="/"> <img src="" alt="Logo" class="img-rresponsive"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $page == 'home' ? 'active' : null ?>" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page == 'quem-somos' ? 'active' : null ?>" href="/quem-somos">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page == 'onde-estamos' ? 'active' : null ?>" href="/onde-estamos">Onde Estamos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link <?= $page == 'contato' ? 'active' : null ?>" href="/contato">Contato</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <section class="container bg-light">
        <?php require("./pages/$page.php"); ?>
    </section>
    


    <footer class="fixed-bottom footer bg-primary">
        <div class="footer-content d-flex justify-content-between ">
            <p><?=date('Y');?></p>
            <p>José Bruno</p>
        </div>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


