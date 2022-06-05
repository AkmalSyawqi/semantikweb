<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MCU - About</title>
    
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body style="background-color:black">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top" style="background-color:#9cd2d5; color:black;">
        <div class="container container-fluid">
            <a class="navbar-brand" href="index.php"><img src="src/img/logo.png" style="width:100px" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 h5">
                    <li class="nav-item px-2">
                        <a class="nav-link active text-black" aria-current="page" href="film.php">Daftar Film</a>
                    </li>
                    <li class="nav-item px-2">
                        <a class="nav-link text-black" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="accordion container my-3" id="accordionPanelsStayOpenExample">
        <!-- <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                About Semantic Web
            </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne" style="background-color:black">
                <div class="accordion-body">
                    <p style="color:white">Semantic Web adalah perpanjangan dari World Wide Web melalui standar yang ditetapkan oleh World Wide Web Consortium (W3C). Tujuan dari Web Semantik adalah membuat data Internet dapat dibaca oleh mesin. Untuk mengaktifkan pengkodean semantik dengan data, teknologi seperti Resource Description Framework (RDF) dan Web Ontology Language (OWL) digunakan.</p>
                </div>
            </div>
        </div> -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                About Project
            </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body" style="background-color:black">
                    <p style="color:white">MCU Search adalah website yang dapat membantu anda mencari data-data terkait film MCU seperti, durasi film, budget syuting, dll. Website ini dibangun dengan Bootstrap, Apache Jena Fuseki, NGROK dan SPARQL.</p>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                About Me
            </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body" style="background-color:black">
                    <p style="color:white">Saya adalah Akmal Syawqi Albar, saat ini sedang kuliah di Teknik Informatika Universitas Padjadjaran.</p>
                </div>
                <div style="background-color:black;">
                <img src="src/img/akmal.jpg" alt="Author" style="width:200px; display:block; margin:auto;">
                </div>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <footer class="footer footer-light text-light text-center pb-1 fixed-bottom" style="background-color:#9cd2d5">
            <p style="color:black">Copyright &copy; All rights reserved - <img src="src/img/logo.png" style="width:100px" alt="Logo"></p>
        </footer>
</body>
</html>