$(document).ready(function() {
    var spinner = $("#spinner");
    spinner.hide();

    // Desactivar el botón al cargar la página
    $('#suscripcionForm button[type="submit"]').prop('disabled', true);

    // Activar el botón cuando se escribe en el campo de correo
    $('#correo').on('input', function() {
        var correo = $(this).val().trim();

        // Desactivar el botón si el campo de correo está vacío
        if (correo === '') {
            $('#suscripcionForm button[type="submit"]').prop('disabled', true);
            return;
        }

        // Realizar la verificación en el servidor
        $.ajax({
            type: "POST",
            url: "verificar_correo.php", // Reemplaza con la ruta correcta
            data: { correo: correo },
            success: function(response) {
                // Si el correo ya existe en la base de datos
                if (response === 'existe') {
                    $('#suscripcionForm button[type="submit"]').prop('disabled', true);
                    $('#repetido').removeClass('d-none');
                } else {
                    $('#suscripcionForm button[type="submit"]').prop('disabled', false);
                    $('#repetido').addClass('d-none');
                }
            },
            error: function(error) {
                console.log("Error al verificar el correo: " + error);
            }
        });
    });

    $('#suscripcionForm').submit(function(e) {
        e.preventDefault(); // Evitar el envío del formulario por defecto

        spinner.show();
        var correo = $('#correo').val();

        $.ajax({
            type: "POST",
            url: "guardar_suscripcion.php",
            data: { correo: correo },
            success: function(response) {
                // Simular un retraso de 3 segundos antes de ocultar el spinner
                setTimeout(function() {
                    spinner.hide();

                    // Ocultar el formulario
                    $('#suscripcionForm').hide();

                    $('#mensaje').removeClass('d-none');
                    $('.form_boletin').addClass('d-none');
                    $('.none_boletin').addClass('d-none');

                    // Agregar un retraso adicional de 3 segundos antes de realizar alguna acción
                    setTimeout(function() {
                        // Realizar alguna acción adicional después de 3 segundos
                        // Por ejemplo, recargar la página
                        location.reload(true);
                    }, 3000);

                }, 3000);
            },
            error: function(error) {
                spinner.hide();
                console.log("Error al suscribirse: " + error);

                // Limpia el campo de correo en caso de error
                $('#correo').val('');

                // Vuelve a desactivar el botón
                $('#suscripcionForm button[type="submit"]').prop('disabled', true);
            }
        });
    });
});
