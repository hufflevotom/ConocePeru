<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="aea.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Pagina web</title>
</head>

<body style="">
    <header>
        <div class="d-flex navbar navbar-dark bg-dark">
            <a class="mr-auto p-2 navbar-brand" href="index.php">Conociendo mi Perú</a>
            <a class="p-2 navbar-brand" href="acercade.php">Acerca De</a>
            <button href="https://www.google.com/" class="btn btn-danger btn-lg">Descargar aplicacion</button>
        </div>
    </header>

    <main>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="margin-top:20px;margin-left:20px;margin-right:20px;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner" style="width: 100%; height:530px;">
                <div class="carousel-item active" style="margin-top:-40%;">
                    <img src="./img/mundo.jpg" alt="...">
                </div>
                <div class="carousel-item" style="margin-top:-30%;">
                    <img src="./img/munda.jpg" alt="...">

                </div>
                <div class="carousel-item" style="width: 150%;margin-top:-30%;">
                    <img src="./img/mundi.jpg" alt="...">
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
    </main>

    <div class="card-deck" style="margin-top: 90px; margin-left:50px; margin-right:50px;">
        <div class="card">
            <img src="./img/costa.jpg" width="20%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">COSTA DEL PERÚ</h5>
            </div>
        </div>
        <div class="card">
            <img src="./img/sierra.jpg" width="20%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">SIERRA DEL PERÚ</h5>
            </div>
        </div>
        <div class="card">
            <img src="./img/selva.jpg" width="20%" height="100%" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-center">SELVA DEL PERÚ</h5>
            </div>
        </div>
    </div>


    <footer id="sticky-footer" class="bg-dark text-white-50" style="margin-top: 100px;">
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="https://www.facebook.com/luisraker"> Luis Ramos</a>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>