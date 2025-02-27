<?php
// Iniciar la sesión
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="icon" href="/asssets/images/logo.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Mulish&display=swap"
            rel="stylesheet"
        >
        <link rel="stylesheet" href="/asssets/css/styleLogin.css">
    </head>
    
    <body>
        <div class="login-wrapper">
            <div class="login-side">
                <a href="#" title="Logo">
                    <img class="logo" src="/asssets/images/logo.png" alt="Logo">
                </a>
                <div class="my-form__wrapper">
                    <div class="login-welcome-row">
                        <h1>Bienvenido &#x1F44F;</h1>
                        <p>Por favor ingresa tus datos!</p>
                    </div>
                    <form method="POST" action="php/login.php" class="my-form">
                        <div class="socials-row">
                            <a href="#" title="Use Google">
                                <img src="/asssets/images/google.png" alt="Google">
                                Inicia con Google
                            </a>
                            <a href="#" title="Use Apple">
                                <img src="/asssets/images/apple.png" alt="Apple">
                                Inicia con Apple
                            </a>
                        </div>
                        <div class="divider">
                            <div class="divider-line"></div>
                            O
                            <div class="divider-line"></div>
                        </div>
                        <div class="text-field">
                            <label for="email">Correo:</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="Tu Correo"
                                required
                            >
                            <img
                                alt="Email Icon"
                                title="Email Icon"
                                src="/asssets/images/email.svg"
                            >
                        </div>
                        <div class="text-field">
                            <label for="password">Contraseña:</label>
                            <input
                                id="password"
                                type="password"
                                name="password"
                                placeholder="Tu contraseña"
                                title="Mínimo 6 caracteres con
                                al menos 1 letra, 1 número y 1 símbolo."
                                pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{6,}$"
                                required
                            >
                            <img
                                alt="Password Icon"
                                title="Password Icon"
                                src="/asssets/images/password.svg"
                            >
                        </div>
                        <input type="submit" class="my-form__button" value="Login">
                        <div class="my-form__actions">
                            <div class="my-form__row">
                                <span>¿Olvidaste tu contraseña?</span>
                                <a href="#" title="Reset Password">
                                    Restablecer contraseña
                                </a>
                            </div>
                            <div class="my-form__signup">
                                <a href="signup.php" title="Crear Cuenta">
                                    Crear una cuenta
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="info-side">
                <img src="/asssets/images/mock.png" alt="Mock" class="mockup">
                <div class="welcome-message">
                    <h2>MentorHub! 👋</h2>
                    <p>
                        "Guiando tu futuro, un paso a la vez."
                    </p>    
                </div>
            </div>
        </div>
        <script src="/asssets/js/login.js"></script>
    </body>
</html>
</html>