<?php 
include '../../../vendor/autoload.php';
?>
<!doctype html>
<html lang="es-ES">

<head>
    <meta charset="utf-8">
    <meta http-equiv="expires" content="-1">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="copyright" content="Ninja Coders">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">

</head>

<body>
    <header>
        <img src="img/logoF5.png" alt="FactoriaF5">
    </header>

    <main>

        <form action="../../model/Login_user.php" method="post">
            <div id="login">

                <div id="logUser">
                    <input type="text" class="userPass" name="dni" placeholder="DNI">
                </div>

                <div id="logContra">
                    <input type="text" class="userPass" name="password" placeholder="Password">
                </div>

                <input type="submit" class="boton" name="Acceder" value="Acceder">
                <div class="guardarPass">
                    <label for="remember-me">Remember me</label> <input type="checkbox" name="remember">
                </div>
                <div id="registrarse">
                    <p>No tienes una cuenta? Si quieres registrarte dale <a class="link"
                            href="register.php">aquí</a></p>
                </div>
            </div>

            </div>

        </form>

    </main>
    <footer>
        <nav class="footer">Barcelona
        </nav>
    </footer>
</body>

</html>