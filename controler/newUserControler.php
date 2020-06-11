<?php
/**
 * CSUNVB - newUserControler.php
 *
 * Initial version by: Bastien.FARDEL
 * Initial version created on: 05.03.2020 14:53
 * Current version: 1.0
 */

require "model/newUserModel.php";

/**
 * function checks if new password and confirm password are correct, then it calls the model to register the new password, otherwise he asks the user to do it again
 *
 */
function newUser()
{
    if (isset($_POST['newPass'])) {
        if (isset($_POST['confirm'])) {
            $confirm = $_POST['confirm'];
            $newPsw = password_hash($_POST['newPass'], PASSWORD_DEFAULT);

            if (password_verify($confirm, $newPsw)) {
                $_SESSION['newPsw'] = $newPsw;
                databasePasswordChange();
                session_destroy();
                $_GET['action'] = 'login';

                require_once 'view/login.php';
            } else {
                echo '<script> alert("Les mots de passe ne correspondent pas !") </script>';
                require_once "view/newUser.php";
            }
        }
    }
    require_once "view/newUser.php";
}