<?php
session_start();



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa</title>

    <link rel="stylesheet" type="text/css" href="./estilos/mapa.css">
    <link rel="stylesheet" type="text/css" href="./estilos/HeaderFooter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <nav id="custom-navbar" class="navbar navbar-expand-lg navbar-light navbar-dark-bg">
                <div class="container-fluid" id="header">
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <a class="navbar-brand Logo" href="./index.php"><img src="./Imagenes/Logo.png" alt="Logo"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <ul class="navbar-nav justify-content-end">
                            <li class="nav-item">
                                <a class="nav-link rojo" id="mapa" href="./mapa.php">Mapa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link amarillo" id="calendario" href="./calendario.php">Calendario</a>
                            </li>
                            <?php
                            if (isset($_SESSION['user_id'])) {
                                echo '<li class="nav-item">
                    <form id="logout-form" action="./php/logout.php" method="post">
                        <button type="submit" class="nav-link btn rojo" data-toggle="modal" data-target="#confirmLogoutModal">Cerrar sesión</button>
                    </form>
                        </li>';


                            } else {
                                echo '<li class="nav-item">
                    <a class="nav-link rojo" id="main" href="./main.php" >Ingresar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link amarillo" id="registro" href="./registro.php">Registro</a>
                </li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Modal -->
            <div class="modal fade" id="confirmLogoutModal" tabindex="-1" role="dialog"
                aria-labelledby="confirmLogoutModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dark" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmLogoutModalLabel">Confirmar cierre de sesión</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ¿Estás seguro de que quieres cerrar sesión?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary" id="confirm-logout-btn">Cerrar sesión</button>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="card-body grid-container">
                            <div class="grid-item">
                                <div class="Antonio_Narino">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Antonio_Nariño.jfif" />
                                            <div class="capa">
                                                <h3>Antonio Nariño</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Barrios_Unidos">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Barrios_Unidos.jfif" />
                                            <div class="capa">
                                                <h3>Barrios Unidos</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Bosa">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Bosa.jpg" />
                                            <div class="capa">
                                                <h3>Bosa</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Chapinero">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Chapinero.jpeg" />
                                            <div class="capa">
                                                <h3>Chapinero</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Ciudad_Bolivar">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Ciudad_Bolivar.jpeg" />
                                            <div class="capa">
                                                <h3>Ciudad Bolivar</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Engativa">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Engativa.png" />
                                            <div class="capa">
                                                <h3>Engativa</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Fontibon">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Fontibon.jpg" />
                                            <div class="capa">
                                                <h3>Fontibon</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Kennedy">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Kennedy.jpg" />
                                            <div class="capa">
                                                <h3>Kennedy</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Candelaria">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Candelaria.jpg" />
                                            <div class="capa">
                                                <h3>Candelaria</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Los_Martires">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Los_Martires.jpg" />
                                            <div class="capa">
                                                <h3>Los Martires</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Puente_Aranda">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Puente Aranda.avif" />
                                            <div class="capa">
                                                <h3>Puente Aranda</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Rafael_Uribe_Uribe">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Rafael_Uribe_Uribe.jfif" />
                                            <div class="capa">
                                                <h3>Rafael Uribe Uribe</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="San_Cristobal">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/San_Cristobal.jpg" />
                                            <div class="capa">
                                                <h3>San Cristobal</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Santafe">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Santafe.jfif" />
                                            <div class="capa">
                                                <h3>Santa Fe</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Suba">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Suba.jpg" />
                                            <div class="capa">
                                                <h3>Suba</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Sumapaz">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Sumapaz.jpg" />
                                            <div class="capa">
                                                <h3>Sumapaz</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Teusaquillo">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Teusaquillo.jpg" />
                                            <div class="capa">
                                                <h3>Teusaquillo</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Tunjuelito">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Tunjuelito.jpg" />
                                            <div class="capa">
                                                <h3>Tunjuelito</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Usaquen">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Usaquen.jfif" />
                                            <div class="capa">
                                                <h3>Usaquen</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                                <div class="Usme">
                                    <a href="#">
                                        <figure>
                                            <img src="./Imagenes/img de localidades/Usme.jpg" />
                                            <div class="capa">
                                                <h3>Usme</h3>
                                                <p>
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing
                                                    elit. Maiores, vero!
                                                </p>
                                            </div>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                            <br><br>
            <footer class="footer">
                <nav>
                    <ul>
                        <li><a href="#">Política de privacidad</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Contacto</a></li>

                        <?php
                        if (isset($_SESSION['user_id'])) {
                            echo '<li><a href="./reg_establecimiento.php">deseas registrar tu establecimiento</a></li>';
                        } else {
                            echo '<li><a data-toggle="modal" data-target="#myModal" href="#">deseas registrar tu establecimiento</a></li>';
                        }
                        ?>

                    </ul>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel">Mensaje</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    Debes estar logeado/Registrado para utilizar este servicio.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <br>
                    <p>© 2023 MyBog. Todos los derechos reservados.</p>
                </nav>
            </footer>

        </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            document.getElementById('logout-form').addEventListener('submit', function (event) {
                event.preventDefault();
                $('#confirmLogoutModal').modal('show');
            });

            document.getElementById('confirm-logout-btn').addEventListener('click', function (event) {
                document.getElementById('logout-form').submit();
            });
        </script>
        <script>
            $(document).ready(function () {
                const localidades = $('.localidad');
                const numLocalidades = localidades.length;
                const localidadesPorPagina = 3;
                let paginaActual = 0;

                function mostrarLocalidades() {
                    localidades.removeClass('visible');
                    for (let i = paginaActual * localidadesPorPagina; i < (paginaActual + 1) * localidadesPorPagina; i++) {
                        localidades.eq(i).addClass('visible');
                    }
                }

                $('#prev-arrow').click(function () {
                    if (paginaActual > 0) {
                        paginaActual--;
                        mostrarLocalidades();
                    }
                });

                $('#next-arrow').click(function () {
                    if (paginaActual < Math.ceil(numLocalidades / localidadesPorPagina) - 1) {
                        paginaActual++;
                        mostrarLocalidades();
                    }
                });

                mostrarLocalidades();
            });
        </script>

</body>


</html>