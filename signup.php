<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Create Account</title>
        <link rel="icon" href="/asssets/images/logo.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Mulish&display=swap"
            rel="stylesheet"
            type='text/css'
        >
        <link rel="stylesheet" href="/asssets/css/styleSignUp.css">
    </head>

    <body>
        <div class="form-wrapper">
            <div class="form-side">
                <a href="#" title="Logo">
                    <img class="logo" src="/asssets/images/logo.png" alt="Logo">
                </a>
                <form method="POST" action="php/registro_usuario.php" class="my-form">
                    <div class="login-welcome-row">
                        <h1>Crea tu Cuenta &#x1F44F;</h1>
                    </div>
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
                        <span class="divider-line"></span>
                        Or
                        <span class="divider-line"></span>
                    </div>
                    <div class="text-field">
                        <label for="email">Correo:
                            <input type="email" id="email" name="email" autocomplete="off" placeholder="Tu Correo"
                                required>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                                <path d="M16 12v1.5a2.5 2.5 0 0 0 5 0v-1.5a9 9 0 1 0 -5.5 8.28"></path>
                            </svg>
                        </label>
                    </div>
                    <div class="text-field">
                        <label for="password">Contraseña:
                            <input id="password" type="password" name="password" placeholder="Tu Contraseña"                 
                                title="Mínimo 6 caracteres con al menos 1 letra, 1 número y 1 símbolo."
                            pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{6,}$" required>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z">
                                </path>
                                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                                <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                            </svg>
                        </label>
                    </div>
                    <div class="text-field">
                        <label for="confirm-password">Repita la contraseña:
                            <input id="confirm-password" type="password" name="password" placeholder="Repite Contraseña"
                                title="Mínimo 6 caracteres con al menos 1 letra, 1 número y 1 símbolo."
                            pattern="^(?=.*[A-Za-z])(?=.*\d)(?=.*[\W_])[A-Za-z\d\W_]{6,}$"required>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2v-6z">
                                </path>
                                <path d="M11 16a1 1 0 1 0 2 0a1 1 0 0 0 -2 0"></path>
                                <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                            </svg>
                        </label>
                    </div>
                    <button class="my-form__button" type="submit">
                        Inscribirse
                    </button>
                    <div class="my-form__actions">
                        <div class="my-form__row">
                            <span>¿Olvidaste tu contraseña?</span>
                            <a href="#" title="Reset Password">
                                Restablecer contraseña
                            </a>
                        </div>
                        <div class="my-form__signup">
                            <a href="index.php" title="Acceder">
                                Acceder
                            </a>
                        </div>
                    </div>
                </form>
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
        <script src="/asssets/js/signup.js"></script>
    </body>

</html>