<?php

    require_once "top.php";

?>

<section class="footer">
        <div id="footer" class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-4"> 
                    <div class="contactos">
                        <h2 style="text-align: start">Ges<span style="color: var(--text-color-span);">Tec</span></h2>
                        <div class="contactos-footer">
                            <p><strong>Direccion: </strong>Esquina Mijares, Avenida Oeste 3, Altagracia, Caracas 1010, 1010, Distrito Capital</p>
                            <p><strong>Correo: </strong><a href="#" style="text-decoration: none; color: white">alexmadrid326@gmail.com</a></p>
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
                            <input type="text" id="formulario-footer" class="input-footer" placeholder="Escriba su mensaje..." style="color: white; padding: 10px">
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
                        <p>© <?php echo date('Y');?> Todos los derechos Reservados. <a href="#">EsAlex's</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>