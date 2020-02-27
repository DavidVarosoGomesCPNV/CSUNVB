<?php
/**
 * CSUNVB - login.php
 *
 * Initial version by: Bastien.Fardel
 * Initial version created on: 06.02.2020 14:28
 * Current version: 1.0
 */
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <title>CSU Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link href="view/content/scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/content/scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="view/contents/css/login.css">
    <link rel="stylesheet" type="text/css" href="view/contents/css/util.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
            <form class="login100-form validate-form" method="post" action="index.php?action=login">
                <span class="login100-form-title p-b-33">Connexion nécessaire</span>

                <div class="wrap-input100 validate-input" data-validate="Un Email valide est requis: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email" required>
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <div class="wrap-input100 rs1 validate-input" data-validate="Le mot de passe est requis">
                    <input class="input100" type="password" name="pass" placeholder="Mot de passe" required>
                    <span class="focus-input100-1"></span>
                    <span class="focus-input100-2"></span>
                </div>

                <div class="container-login100-form-btn m-t-20">
                    <button class="login100-form-btn">Se connecter</button>
                </div>

                <div class="text-center p-t-45 p-b-4">
                    <span class="txt1">Vous avez oublié</span>

                    <a href="#" class="txt2 hov1">votre mot de passe ?</a>
                </div>
            </form>
        </div>
    </div>
</div>


<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

</body>
</html>