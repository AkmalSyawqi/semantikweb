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
    <?php
    require_once("sparqllib.php");
    $searchInput = "";
    $filter = "";

    if (isset($_POST['search'])) {
        $searchInput = $_POST['search'];
        $data = sparql_get(
            "http://localhost:3030/mcu",
            "
                PREFIX id: <https://mcu.com/>
                PREFIX film: <https://mcu.com/ns/film#>

                SELECT ?NamaFilm ?ReleaseDate ?Duration ?Director ?Producer ?IMDB ?Metascore ?Cast ?Budget
                WHERE
                { 
                    ?films
                    film:NamaFilm       ?NamaFilm ;
                    film:ReleaseDate    ?ReleaseDate ;
                    film:Duration       ?Duration ;
                    film:Director       ?Director ;
                    film:Producer       ?Producer ;
                    film:IMDB           ?IMDB ;
                    film:Metascore      ?Metascore ;
                    film:Cast           ?Cast ;
                    film:Budget         ?Budget .
                        FILTER 
                        (regex (?NamaFilm, '$searchInput', 'i') 
                        || regex (?ReleaseDate, '$searchInput', 'i') 
                        || regex (?Duration, '$searchInput', 'i') 
                        || regex (?Director, '$searchInput', 'i') 
                        || regex (?Producer, '$searchInput', 'i') 
                        || regex (?IMDB, '$searchInput', 'i') 
                        || regex (?Metascore, '$searchInput', 'i')
                        || regex (?Cast, '$searchInput', 'i')
                        || regex (?Budget, '$searchInput', 'i'))
                }
            "
        );
    } else {
        $data = sparql_get(
            "http://localhost:3030/mcu",
            "
                PREFIX id: <https://mcu.com/>
                PREFIX film: <https://mcu.com/ns/film#>
                
                SELECT ?NamaFilm ?ReleaseDate ?Duration ?Director ?Producer ?IMDB ?Metascore ?Cast ?Budget
                WHERE
                { 
                    ?films
                    film:NamaFilm       ?NamaFilm ;
                    film:ReleaseDate    ?ReleaseDate ;
                    film:Duration       ?Duration ;
                    film:Director       ?Director ;
                    film:Producer       ?Producer ;
                    film:IMDB           ?IMDB ;
                    film:Metascore      ?Metascore ;
                    film:Cast           ?Cast ;
                    film:Budget         ?Budget .
                }
            "
        );
    }

    if (!isset($data)) {
        print "<p>Error: " . sparql_errno() . ": " . sparql_error() . "</p>";
    }
    ?>

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
                <form class="d-flex" role="search" action="" method="post" id="search" name="search">
                    <input class="form-control me-2" style="width: 850px; height: 50px;" type="search" placeholder="Ketik keyword disini" aria-label="Search" name="search">
                    <button class="btn btn-outline-success" style="background-color:#FFB6C1" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Body -->
    <div class="container container-fluid my-3">
        <?php
        if ($searchInput != NULL) {
        ?>
            <i class="fa-solid fa-magnifying-glass" style="color:white"></i><span style="color:white">Menampilkan hasil pencarian untuk <b>"<?php echo $searchInput; ?>"</b></span>
        <?php
        }
        ?>
            <table class="table table-bordered table-dark table-hover text-center table-responsive" style="color:black">
            <thead class="table-primary align-middle">
                <tr>
                    <th>No.</th>
                    <th>Nama Film</th>
                    <th>Tanggal Rilis</th>
                    <th>Durasi Film</th>
                    <th>Director</th>
                    <th>Producer</th>
                    <th>IMDB</th>
                    <th>Metascore</th>
                    <th>Cast</th>
                    <th>Budget</th>
                </tr>
            </thead>
            <tbody class="align-middle" style="color:white">
                <?php $i = 0; ?>
                <?php foreach ($data as $data) : ?>
                    <td><?= ++$i ?></td>
                    <td><?= $data['NamaFilm'] ?></td>
                    <td><?= $data['ReleaseDate'] ?></td>
                    <td><?= $data['Duration'] ?></td>
                    <td><?= $data['Director'] ?></td>
                    <td><?= $data['Producer'] ?></td>
                    <td><?= $data['IMDB'] ?></td>
                    <td><?= $data['Metascore'] ?></td>
                    <td><?= $data['Cast'] ?></td>
                    <td><?= $data['Budget'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Footer -->
    <?php
    if ($searchInput != NULL) {
    ?>
        <footer class="footer footer-light text-light text-center pb-1 fixed-bottom" style="background-color:#9cd2d5">
            <p>Copyright &copy; All rights reserved - <img src="src/img/logo.png" style="width:100px" alt="Logo"></p>
        </footer>
    <?php
    } else {
    ?>
        <footer class="footer footer-light text-light text-center pb-1" style="background-color:#9cd2d5">
            <p style="color:black">Copyright &copy; All rights reserved - <img src="src/img/logo.png" style="width:100px" alt="Logo"></p>
        </footer>
    <?php
    }
    ?>
</body>

</html>