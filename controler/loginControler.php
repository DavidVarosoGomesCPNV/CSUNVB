<?php
/**
 * CSUNVB - loginControler.php
 *
 * Initial version by: Bastien.Fardel
 * Initial version created on: 06.02.2020 15:32
 * Current version: 1.0
 */

require "model/loginModel.php";

/**
 * function checks the login information, if something is wrong it will alert the user and will prevent the user from accessing the site
 */
function loginCheck()
{
    if (isset($_POST['email']) && isset($_POST['pass'])) {
        $email = $_POST['email'];
        $password = $_POST['pass'];

        if (databaseLoginCheck($email, $password) == true) { //The email and password are correct, proceed to home page
            if (isset($_SESSION['new'])) {
                if ($_SESSION['new'] == 'yes') {
                    $_GET['action'] = "newUser";

                    require_once 'view/newUser.php';
                } else {
                    $_GET['action'] = "home";

                    require_once 'view/home.php';
                }
            }
        } else { //The email and password are incorrect, proceed to alert the user and reload the page
            echo '<script> alert ("Email ou mot de passe incorrect") </script>';
            require_once 'view/login.php';
        }
    } else {
        require_once 'view/login.php';
    }
}

/**
 * function checks if the user is logged, if not they will be forced to the login page
 */
function checkLoggedIn()
{
    if (isset($_SESSION['user']) && isset($_SESSION['sector'])) { //If the user is connected return bool true otherwise return bool false
        return true;
    } else {
        return false;
    }
}