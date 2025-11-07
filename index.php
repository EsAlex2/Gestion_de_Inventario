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
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><ion-icon name="logo-html5"></ion-icon></a>
            <div class="d-flex w-50 justify-content-center">
                <ul class="nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Acerca de</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Colaboradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <a class="btn btn-outline-light" style="margin-right: 10px;" href="#" role="button">Registrarse</a>
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
    <section id="about" class="about-us" style="margin-bottom: 80px;">
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
    <section>
        <div class="container">
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
                            <a href="#" style="float: right;">¿No tienes una cuenta? Regístrate</a>
                        </div>
                        <div class="mt-3" style="text-align: center; padding-top: 45px; padding-bottom: 10px;">
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
    <section>
        <div id="colaboradores" class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <h3>Colaboradores</h3>
                    <div id="carouselExampleCaptions" class="carousel slide">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>First slide label</h5>
                                    <p>Some representative placeholder content for the first slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Second slide label</h5>
                                    <p>Some representative placeholder content for the second slide.</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="..." class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Third slide label</h5>
                                    <p>Some representative placeholder content for the third slide.</p>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>