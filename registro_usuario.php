<?php
require_once('top.php');
?>
<section>
    <div class="container-lg">
        <div class="row">
            <div class="col-md-10 col-lg-10">
                <div class="rol" id="rolUsuario">
                    <div class="title-rol">
                       <h4>Administracion de usuarios</h4>
                        <p>Para continuar con el registro...</p> 
                    </div>
                    <div class="input-role">
                        <button type="submit" class="btn btn-outline-primary" id="admin">Administrador</button>
                        <button type="submit" class="btn btn-outline-primary" id="user">Usuario</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                        <input type="text" class="input-registro" required placeholder="Nombres" maxlength="45">
                        <input type="text" class="input-registro" required placeholder="Apellidos" maxlength="45" style="margin-top: 20px;">
                    </div>
                    <div id="input" class="mb-4">
                        <input type="email" class="input-registro" required placeholder="Correo Electronico" maxlength="30">
                        <input type="text"  class="input-registro" required placeholder="Telefono" maxlength="11" style="margin-top: 20px;">
                        <input type="text"  class="input-registro" required placeholder="Telefono de Emergencia" maxlength="11" style="margin-top: 20px;">
                    </div>
                    <div id="input" class="mb-4">
                        <input type="password" class="input-registro" required maxlength="16">
                        <input type="password" class="input-registro" required maxlength="16" style="margin-top: 20px;">
                    </div>
                    <div id="date" class="mb-4">
                        <input type="date" required style="margin-top: 20px;">
                    </div>
                    <div class="button-registro">
                        <button type="submit" class="btn btn-outline-primary" style="width: 50%;">REGISTARSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
      $(document).ready(function() {
    // 1. Ocultar ambos formularios al cargar la página (si no lo hiciste en HTML)
    // Aunque es mejor ocultarlos con CSS/inline style como se sugirió arriba.
    $('#registroAdmin').hide();
    $('#registroUsuario').hide();


    // 2. Manejar el clic en el botón 'Administrador'
    $('#admin').on('click', function(e) {
        e.preventDefault(); // Evita la acción por defecto del botón (si la tiene)

        // Oculta el formulario de usuario
        $('#registroUsuario').slideUp(400); 
        
        // Muestra el formulario de administrador
        $('#registroAdmin').slideDown(400); 
        
        // Opcional: Agregar una clase 'active' al botón seleccionado si quieres resaltarlo
        $('.input-role button').removeClass('active');
        $(this).addClass('active');
    });

    // 3. Manejar el clic en el botón 'Usuario'
    $('#user').on('click', function(e) {
        e.preventDefault(); // Evita la acción por defecto del botón (si la tiene)

        // Oculta el formulario de administrador
        $('#rolUsuario').slideUp(400); 

        // Muestra el formulario de usuario
        $('#registroUsuario').slideDown(400); 
        
        // Opcional: Agregar una clase 'active' al botón seleccionado
        $('.input-role button').removeClass('active');
        $(this).addClass('active');
    });
});
</script>
<?php 

require_once('footer.php');

?>