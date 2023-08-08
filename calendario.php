<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Mostrar el modal
    echo '<script>
            $(document).ready(function() {
                $("#myModal").modal("show");
            });
          </script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="./estilos/calendario.css">
    <link rel="stylesheet" href="./estilos/HeaderFooter.css">
    <title>MyBog</title>
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
                            <li class="nav-item rojo">
                                <a class="nav-link" id="mapa" href="./mapa.php">Mapa</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link amarillo" id="calendario" href="./calendario.php">Calendario</a>
                            </li>
                            <?php
                            if (isset($_SESSION['user_id'])) {
                                echo '<li class="nav-item rojo">
                            <form id="logout-form" action="./php/logout.php" method="post">
                            <button type="submit" class="nav-link btn " data-toggle="modal" data-target="#confirmLogoutModal">Cerrar sesión</button>


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

            <div class="container">
                <div class="calendar-container">
                    <div class="calendar">
                        <div class="calendar__info">
                            <div class="calendar__prev" id="prev-month">&#9664;</div>
                            <div class="calendar__month" id="month"></div>
                            <div class="calendar__year" id="year"></div>
                            <div class="calendar__next" id="next-month">&#9654;</div>
                        </div>
                        <br>
                        <div class="calendar__week">
                            <div class="calendar__day calendar__item">Lunes</div>
                            <div class="calendar__day calendar__item">Martes</div>
                            <div class="calendar__day calendar__item">MIercoles</div>
                            <div class="calendar__day calendar__item">Jueves</div>
                            <div class="calendar__day calendar__item">Viernes</div>
                            <div class="calendar__day calendar__item">Sabado</div>
                            <div class="calendar__day calendar__item">Domingo</div>
                        </div>
                        <div class="calendar__dates" id="dates"></div>
                    </div>
                </div>

                <div class="content-container">
                    <div class="content">
                        <div class="actividades-del-dia">
                            <img class="comercial" src="./Imagenes/musical.jpg" alt="">
                            <span>Actividades del día</span>
                            <hr>
                            <label class="actividadcen">Queen inmersivo</label>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto labore eius possimus quam
                                sed,
                                quas eveniet
                                et, provident vitae ullam ea?.</p>
                        </div>
                        <div class="comercial">
                            <a href="./evento.php">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
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
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="./Funcionamiento_por_js/scripts_calendar.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="./Funcionamiento_por_js/Funcionamiento.js"></script>
        <script>
            const selectDay = (dayElement) => {
                if (selectedDay) {
                    selectedDay.classList.remove('calendar__date--selected');
                }
                selectedDay = dayElement;
                selectedDay.classList.add('calendar__date--selected');

                // Obtener el número de día seleccionado
                const selectedDate = parseInt(dayElement.textContent);

                // Obtener el div de información del día
                const dayInfoDiv = document.getElementById('day-info');

                // Crear y establecer el contenido del div de información del día
                const dayInfoContent = `Información del día ${selectedDate}`;
                dayInfoDiv.innerHTML = dayInfoContent;
            };
        </script>
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
                $("#myModal").modal("show");
            });
        </script>
</body>



</html>