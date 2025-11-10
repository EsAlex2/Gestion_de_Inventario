<?php
require_once('top.php');
?>

<section>
    <div class="container-lg">
        <div class="row">
            <div class="col-md-10 col-lg-10">
                <form class="registro_usuario" id="registroUsuario" method="POST" data-validate>
                    <div class="form-grid">
                        <h2>Crear Cuenta</h2>
                        <p>Debe llenar todos los campos</p>
                    </div>
                    <div id="input" class="mb-4">
                        <input type="text" id="nameFirts" class="input-registro" required placeholder="Nombres" maxlength="45">
                        <input type="text" id="nameFirts" class="input-registro" required placeholder="Apellidos" maxlength="45" style="margin-top: 20px;">
                    </div>
                    <div id="input" class="mb-4">
                        <input type="email" id="email_telf" class="input-registro" required placeholder="Correo Electronico" maxlength="30">
                        <input type="text" id="email_telf" class="input-registro" required placeholder="Telefono" maxlength="11" style="margin-top: 20px;">
                        <input type="text" id="email_telf" class="input-registro" required placeholder="Telefono de Emergencia" maxlength="11" style="margin-top: 20px;">
                    </div>
                    <div id="input" class="mb-4">
                        <input type="password" id="pass" class="input-registro" required maxlength="16">
                        <input type="password" id="pass" class="input-registro" required maxlength="16" style="margin-top: 20px;">
                    </div>
                    <div id="date" class="mb-4">
                        <input type="date" id="date_b" required style="margin-top: 20px;">
                    </div>
                    <div class="button-registro">
                        <button type="submit" class="btn btn-outline-primary" style="width: 50%;">REGISTARSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php 

require_once('footer.php');

?>