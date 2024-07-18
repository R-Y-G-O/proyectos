<!DOCTYPE html>
<html lang="en" class="vh-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .bg-image {
            background-image: url('assets/images/images.png'); 
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin-right: -15px; 
            margin-left: -15px;
        }
    </style>
</head>
<body class="vh-100">
    <div class="container-fluid h-100">
        <div class="row no-gutters h-100">
            <div class="col-md-6 d-none d-md-flex bg-image"></div>
            <div class="col-md-6 bg-light">
                <div class="login d-flex align-items-center py-5 h-100">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 id="formTitle" class="display-4">Iniciar sessión</h3>
                                <form id="loginForm" method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <input id="inputEmail" name="email" type="email" placeholder="Correo electrónico" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" name="password" type="password" placeholder="Contraseña" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Recordar contraseña</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Iniciar sesión</button>
                                    <div class="text-center d-flex justify-content-between mt-4">
                                        <p>¿No tienes una cuenta? <a href="#" id="registerLink" class="font-italic text-muted"> 
                                            <u>REGÍSTRATE</u></a></p>
                                    </div>
                                </form>                

								<form id="registerForm" style="display: none;" action="{{ route('register') }}" method="POST">
									@csrf
									<div class="form-group mb-3">
										<input id="inputName" type="text" name="name" placeholder="Nombre" required="" class="form-control rounded-pill border-0 shadow-sm px-4">
									</div>
									<div class="form-group mb-3">
										<input id="inputEmailRegister" type="email" name="email" placeholder="Correo electrónico" required="" class="form-control rounded-pill border-0 shadow-sm px-4">
									</div>
									<div class="form-group mb-3">
										<input id="inputPasswordRegister" type="password" name="password" placeholder="Contraseña" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
									</div>
									
									<div class="form-group mb-3">
										<input id="inputPasswordConfirm" type="password" name="password_confirmation" placeholder="Confirmar contraseña" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
									</div>									
									<button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Registrarse</button>
									<div class="text-center d-flex justify-content-between mt-4">
										<p>¿Ya tienes una cuenta? <a href="#" id="loginLink" class="font-italic text-muted"> 
											<u>INICIAR SESIÓN</u></a></p>
									</div>			
									<div id="passwordError" class="alert alert-danger" style="display: none;"></div>
								</form>

                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Captura de los elementos de los formularios
        const loginForm = document.getElementById('loginForm');
        const registerForm = document.getElementById('registerForm');
        // Captura de los enlaces para cambiar entre los formularios
        const loginLink = document.getElementById('loginLink');
        const registerLink = document.getElementById('registerLink');
        
        // Evento click en el enlace de registro
        registerLink.addEventListener('click', function(e) {
            e.preventDefault(); // Previene el comportamiento predeterminado del enlace
            loginForm.style.display = 'none'; // Oculta el formulario de inicio de sesión
            registerForm.style.display = 'block'; // Muestra el formulario de registro
            document.getElementById('formTitle').textContent = 'Registrarte'; // Cambia el texto del encabezado
        });
        
        // Evento click en el enlace de inicio de sesión
        loginLink.addEventListener('click', function(e) {
            e.preventDefault(); // Previene el comportamiento predeterminado del enlace
            registerForm.style.display = 'none'; // Oculta el formulario de registro
            loginForm.style.display = 'block'; // Muestra el formulario de inicio de sesión
            document.getElementById('formTitle').textContent = 'Iniciar sessión'; // Restaura el texto del encabezado
        });
    </script>
</body>
<!-- Tu script JavaScript modificado -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const registerForm = document.getElementById('registerForm');
            const passwordError = document.getElementById('passwordError');

            registerForm.addEventListener('submit', function(event) {
                event.preventDefault(); // Evitar el envío del formulario por defecto

                const inputPasswordRegister = document.getElementById('inputPasswordRegister');
                const inputPasswordConfirm = document.getElementById('inputPasswordConfirm');

                // Validar la longitud de la contraseña
                if (inputPasswordRegister.value.length < 9) {
                    passwordError.textContent = 'La contraseña debe tener al menos 9 caracteres.';
                    passwordError.style.display = 'block'; // Mostrar el mensaje de error
                    return; // Detener el proceso de registro
                }

                // Validar que las contraseñas coincidan
                if (inputPasswordRegister.value !== inputPasswordConfirm.value) {
                    passwordError.textContent = 'Las contraseñas no coinciden.';
                    passwordError.style.display = 'block'; // Mostrar el mensaje de error
                    return; // Detener el proceso de registro
                }

                // Si pasa todas las validaciones, enviar el formulario
                this.submit();
            });
        });
    </script>
</html
