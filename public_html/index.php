<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-white forest">
<nav class="navbar navbar-expand-lg ">
    <img src="./ico/tree.ico" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link white" href="#">Главная <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link white" href="#">Информация</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form>
    </div>
    <nav class="navbar navbar-light my-icon">
        <a class="navbar-brand" href="#">
            <img src="./ico/heart-icon_34407.ico" alt="">
        </a>

    </nav>
    <nav class="navbar navbar-light my-icon">
       <a class="navbar-brand" href="#">
                    <img src="./ico/cart.ico" alt="">
                </a>



    </nav>
</nav>

<div>
    <div class="container">
        <div class="row">
            <div class="col hz ">

            </div>
            <div class="col-12  field  semilayer">
                <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center  field bear">
                    <div class="col-md-5 p-lg-5 mx-auto my-5 col-10">
                        <p class="lead font-weight-bolder gabriola  happy text-center ">Новогодние подарки</p>
                        <?php
                        $db = mysqli_connect('localhost', 'root', '','christmas_toy') or die('Подключение к БД не удалось');
                        $query = "SELECT * FROM toys";
                        $result = mysqli_query($db, $query);
                        $toys = [];
                        while($row = mysqli_fetch_array($result))
                        {
                         $toys[] = $row;
                        }
                        ?>
                    </div>
                    <div class="product-device hz shadow-sm d-none d-md-block"></div>
                    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
                </div>
                <div>
                    <div class="container">
                        <div class=" row">
                            <?php foreach ($toys as $toy): ?>
                            <div class="mt-2 col-md-4">
                                <div class="card opacity">
                                    <img src="image/<?php echo $toy['src']?>" class="card-img-top" alt="Картинка">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $toy['name']?></h5>
                                        <p class="card-text"><?php echo $toy['desk']?></p>
                                        <p class="card-text"><small class="text-muted">Цена: </small><?php echo $toy['price']?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="col"></div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</body>
</html>