<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    // Redirect to main.php


    header('Location: ./main.php');
    // Show modal message
    
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olvido su contraseña</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./estilos/Style_reg_establecimiento.css">
    <link rel="stylesheet" href="./estilos/HeaderFooter.css">
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


            


            <div class="container">
                <div class="row">
                    <div class="col-md-6 image-preview-container">
                        <div class="image-preview" id="image-preview"></div>
                        <div class="image-preview-nav">
                            <span class="nav-arrow prev">&#8249;</span>
                            <span class="nav-arrow next">&#8250;</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="login-box">
                            <h2>Registro de Establecimiento</h2>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" required>
                                    <label>Nombre del Establecimiento</label>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="" disabled selected>Seleccione el Tipo de Establecimiento
                                        </option>
                                        <option value="restaurante">Restaurante</option>
                                        <option value="hotel">Hotel</option>
                                        <option value="tienda">Tienda</option>
                                    </select>
                                    <label>Tipo de Establecimiento</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required>
                                    <label>Dirección</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required>
                                    <label>Teléfono</label>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" required>
                                    <label>Nombre del Propietario</label>
                                </div>
                                <div class="form-group">
                                    <label>Horario</label>
                                    <div class="time-range">
                                        <input type="time" class="form-control" required>
                                        <span> a </span>
                                        <input type="time" class="form-control" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" required>
                                    <label>Correo Electrónico</label>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="3" required></textarea>
                                    <label>Información Adicional</label>
                                </div>
                                <div class="form-group">
                                    <label for="photos">Fotos</label>
                                    <input type="file" class="form-control-file" id="photos" accept="image/*" multiple
                                        required>
                                </div>

                                <br>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Enviar Registro</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <br><br><br>
            <footer class="footer">
                <nav>
                    <ul>
                        <li><a href="#">Política de privacidad</a></li>
                        <li><a href="#">Términos y condiciones</a></li>
                        <li><a href="#">Contacto</a></li>
                    </ul>
                    <br>
                    <p>© 2023 MyBog. Todos los derechos reservados.</p>
                </nav>
            </footer>
        </div>
        <script src="./Funcionamiento_por_js/reg_establecimiento.js"></script>
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

</body>

</html>