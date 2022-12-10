<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar Cita | Barbershop</title>
    <script src="https://kit.fontawesome.com/97bed5bbe0.js" crossorigin="anonymous"></script>
    <script src="js/scrollreveal.js"></script>
    <link rel="stylesheet" href="./css/style.css" type="text/css">
    <link rel="stylesheet" href="./css/jquery.booklet.latest.css" type="text/css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="sersection1">
        <header class="encabezado">
            <a id="img" href=""><img src="./assets/logotipo.png" alt="..."></a>
            <div class="menu">
                <nav>
                    <ul>
                        <li><a href="./index.php">INICIO</a></li>
                        <li><a href="./servicios.php">SERVICIOS</a></li>
                        <li><a href="./somos.php">NOSOTROS</a></li>
                        <li><a href="./contactanos.php">CONTÁCTANOS</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <div class="serbanner">
            <h1>REGISTRAR UNA CITA</h1>
            <p>HOME:REGISTRAR CITA</p>
        </div>
    </div>
    <main>
        <div class="container" id="regcontainer">
            <div class="row">
                <div class="col-6">
                    <img src="./assets/imgHisotira.png" class="img-fluid" alt="...">                </div>
                <div class="col-6">
                    <h6 class="text-center text-white">RESERVACIONES</h6>
                    <p class="fs-2 text-center">Haga una cita</p>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                        <option selected>SELECCIONA NUESTRO SERVICIOS</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <div class="form-floating mb-3">
                        <input type="date" class="form-control" id="floatingInput" placeholder="dd/mm/aaa">
                        <label for="floatingInput">Fecha</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="time" class="form-control" id="floatingPassword" placeholder="--:--">
                        <label for="floatingPassword">Hora</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="123456789">
                        <label for="floatingPassword">Teléfono</label>
                    </div>
                    <div class="d-flex justify-content-center">
                    <button onclick="location.href = 'registrarCita.php';" id="resbutton">Haz una cita</button>
                    </div>
                </div>
            </div>
        </div>
    <main>
        <!-- FOOTER -->
        <?php include 'footer.php'; ?>
</body>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="./js/jquery-2.1.0.min.js" type="text/javascript"></script>
<script src="./js/jquery-ui-1.10.4.min.js" type="text/javascript"></script>
<script src="./js/jquery.booklet.latest.min.js" type="text/javascript"></script>
<script src="./js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="./js/scrip.js" type="text/javascript"></script>
<script src="js/index.js"></script>
</html>