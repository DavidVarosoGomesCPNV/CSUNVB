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
 * function checks if new password and confirm password are correct, then it calls the model to register the new password, otherwise he asks the user to do it again, also in case of an unknown access to the page, the mail will be set to "Erreur" in order to inform the user that there was an unauthorised access to the page.
 *
 * @return bool
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
            if (password_verify($confirm, $newPwd)) {
                $_GET['action'] = 'login';

                require_once 'view/login.php';
                return true;
            } else {
                return false;
            }
        }
    }
    require_once "view/newUser.php";
}