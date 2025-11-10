<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="./views/styles.css">
    <title>Gestion de Inventario</title>
</head>

<body>
    <!--barra de navegacion-->
    <nav class="navbar" data-bs-theme="dark">
        <div class="container">
            <h2 style="font-weight: bold;"><a class="navbar-brand" href="#">Ges<span
                        style="color: var(--text-color-span)">Tec</span></a></h2>
            <div class="d-flex w-50 justify-content-center">
                <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#colaboradores">Colaboradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#footer">Contacto</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <a class="btn btn-outline-light" style="margin-right: 10px;" href="registro_usuario.php"
                    role="button">Registrarse</a>
                <a class="btn btn-outline-light" href="#login-title" role="button">Iniciar Sesion</a>
            </div>
        </div>
    </nav>

    <!--banner de bienvenida-->
    <section class="banner-bienvenida">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-lg-7">
                    <div class="text-box">
                        <h1><strong>Automatización inteligente para su <span
                                    style="color: var(--text-color-span);">gestión de stock</span></strong></h1><br>
                        <h3>Deje de Contar,<span style="color: var(--text-color-span);"> Empiece a Crecer</span></h3>
                        <p style="font-size: 0.9rem">La Gestión de Inventario que Transforma el Caos en Control y
                            Rentabilidad</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--fin del banner de bienvenida-->

    <!--Acerca de Nosotros-->
    <section id="about" class="about-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="text-box-about">
                        <h4 style="color: var(--text-color-span);">Acerca de Nosotros</h4>
                        <h3 style="font-size: 1.5rem;">Su socio de Confianza en Gestión de Inventario</h3>

                        <p style="padding-top: 40px;">En [Nombre de la Empresa], nos dedicamos a revolucionar la forma
                            en que las empresas
                            gestionan su
                            inventario. Con años de experiencia en el sector, entendemos los desafíos únicos que
                            enfrentan
                            las empresas al intentar mantener un control eficiente de sus existencias. Nuestro objetivo
                            es
                            proporcionar soluciones innovadoras y personalizadas que simplifiquen la gestión de
                            inventario,
                            mejoren la precisión y aumenten la rentabilidad.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <img id="image" src="./views/about-us.jpg" alt="Acerca de Nosotros" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!--fin de Acerca de Nosotros-->

    <!--formulario de login-->
    <section class="login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-lg-6" style="border-radius: 5px;">
                    <form class="login-form">
                        <div class="mb-3">
                            <h3 id="login-title">Iniciar Sesión</h3>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" required maxlength="40">
                            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con
                                nadie más.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" required
                                maxlength="15">
                        </div>
                        <div class="mb-3">
                            <a href="#">¿Olvidaste tu contraseña?</a>
                            <a href="registro_usuario.php" style="float:right;">¿No tienes una cuenta? Regístrate</a>
                        </div>
                        <div class="mt-5" style="text-align: center;">
                            <button type="submit" class="btn btn-outline-primary">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-lg-6" style="border-radius: 5px;">
                    <div class="login-form">
                        <div class="mb-3">
                            <h3 id="login-title">Servicios</h3>
                        </div>
                        <div class="mb-3">
                            <p id="services"><ion-icon name="checkmark-circle-sharp"></ion-icon> Gestión de Inventario
                                Automatizada</p>
                            <p id="services"><ion-icon name="podium"></ion-icon> Informes y Análisis en Tiempo Real</p>
                            <p id="services"><ion-icon name="server"></ion-icon> Integración con Sistemas Existentes</p>
                            <p id="services"><ion-icon name="key"></ion-icon> Soporte Técnico 24/7</p>
                            <p id="services"><ion-icon name="flash"></ion-icon> Mantenimiento Preventivo y Correctivo
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--fin del formulario de login-->

    <!--colaboradores-->
    <section class="team">
        <div class="container-fluid" style="margin: 60px ">
            <div class="fotos">
                <div class="row">
                    <div id="colaboradores" class="col-12 text-center" style="padding-bottom: 100px">
                        <h3 style="margin-bottom: 40px;">Colaboradores</h3>
                        <p id="text-colaboladores">Nuestro equipo son un grupo de estudiantes universitarios con
                            habilidades...</p>
                    </div>
                    <div id="colaboradores_foto" class="col-6 col-md-3 text-center">
                        <img src="./views/team1.png" alt="Colaborador 2" class="img-fluid colaborador-img">
                        <p id="text-colaboladores">Alex J. Madrid</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis<br></p>
                    </div>
                    <div id="colaboradores_foto" class="col-6 col-md-3 text-center">
                        <img src="./views/team2.png" alt="Colaborador 2" class="img-fluid colaborador-img">
                        <p id="text-colaboladores">Alex J. Madrid</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    </div>
                    <div id="colaboradores_foto" class="col-6 col-md-3 text-center">
                        <img src="./views/team3.png" alt="Colaborador 3" class="img-fluid colaborador-img">
                        <p id="text-colaboladores">Alex J. Madrid</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    </div>
                    <div id="colaboradores_foto" class="col-6 col-md-3 text-center"">
                        <img src=" ./views/team3.png" alt="Colaborador 3" class="img-fluid colaborador-img">
                        <p id="text-colaboladores">Alex J. Madrid</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--fin para los colaboradores-->

    <!--Footer-->
    <section class="footer">
        <div id="footer" class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-4">
                    <div class="contactos">
                        <h2 style="text-align: start">Ges<span style="color: var(--text-color-span);">Tec</span></h2>
                        <div class="contactos-footer">
                            <p><strong>Direccion: </strong>Esquina Mijares, Avenida Oeste 3, Altagracia, Caracas 1010,
                                1010, Distrito Capital</p>
                            <p><strong>Correo: </strong><a href="#"
                                    style="text-decoration: none; color: white">alexmadrid326@gmail.com</a></p>
                            <p><strong>Telefono: </strong>+58 414 3770143</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="contactos">
                        <h5 style="padding-left: 28px">Menus</h5>
                        <ul class="menus">
                            <li><a id="link-menus" href="#">Home</a></li>
                            <li><a id="link-menus" href="#">Acerca de Nosotros</a></li>
                            <li><a id="link-menus" href="#">Servicios</a></li>
                            <li><a id="link-menus" href="#">Colaboradores</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="contactos">
                        <h5>Para mas informacion</h5>
                        <p><span style="color: var(--text-color-span);">Contactanos</span></p>
                    </div>
                    <form class="form-footer">
                        <div class="mb-1">
                            <label for="formulario-footer" class="label-footer">Nombre</label>
                            <input type="text" id="formulario-footer" class="input-footer" style="color: white">
                        </div>
                        <div class="mb-1">
                            <label for="formulario-footer" class="label-footer">Correo Electronico</label>
                            <input type="email" id="formulario-footer" class="input-footer" style="color: white">
                        </div>
                        <div class="mb-1">
                            <input type="text" id="formulario-footer" class="input-footer"
                                placeholder="Escriba su mensaje..." style="color: white; padding: 10px">
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-outline-light">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright" style="text-align: center; padding-top: 10px">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p>© <?php echo date('Y'); ?> Todos los derechos Reservados. <a href="#">EsAlex's</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>