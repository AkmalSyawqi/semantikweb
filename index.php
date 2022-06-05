<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCU - Home</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c3c1353c4c.js" crossorigin="anonymous"></script>
</head>

<body style="background-color:black">
   

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color:#9cd2d5">
        <div class="container container-fluid">
            <a class="navbar-brand" href="index.php"><img src="src/img/logo.png" style="width:100px" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 h5">
                    <li class="nav-film px-2">
                        <a class="nav-link active text-black" aria-current="page" href="film.php">Daftar Film</a>
                    </li>
                    <li class="nav-film px-2">
                        <a class="nav-link text-black" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <div id="carouselExampleIndicators" class="carousel slide mt-4" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="src/img/thor.jpg" class="d-block w-50" style="display: block; margin-left: auto; margin-right: auto; size:100%;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="src/img/hulk.jpg" class="d-block w-50" style="display: block; margin-left: auto; margin-right: auto; size:100%;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="src/img/ironman.jpg" class="d-block w-50" style="display: block; margin-left: auto; margin-right: auto; size:100%;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="src/img/spiderman.jpg" class="d-block w-50" style="display: block; margin-left: auto; margin-right: auto; size:100%;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="src/img/gg.jpg" class="d-block w-50" style="display: block; margin-left: auto; margin-right: auto; size:100%;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="src/img/ca.jpg" class="d-block w-50" style="display: block; margin-left: auto; margin-right: auto; size:100%;" alt="...">
            </div>
            <div class="carousel-item">
                <img src="src/img/antman.jpg" class="d-block w-50" style="display: block; margin-left: auto; margin-right: auto; size:100%;" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



     <!-- Footer -->
    <footer class="footer text-light text-center footer-light pb-1 fixed-bottom" style="background-color:#9cd2d5">
            <p style="color:black">Copyright &copy; All rights reserved - <img src="src/img/logo.png" style="width:100px" alt="Logo"></p>
    </footer>
</body>

</html>